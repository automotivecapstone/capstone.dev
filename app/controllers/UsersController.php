<?php

class UsersController extends \BaseController {


	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('create', 'store')));
	}
	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User();
        Log::info(Input::all());
		$result= $this->validateAndSave($user);
		

		if($result) {
			Auth::login($user);
			$user = Auth::user();
			Session::flash('successMessage', 'Your user has been saved.');
			return Redirect::action('UsersController@show', $user ->id);
		} else {
			Session::flash('errorMessage', 'user not saved');
			return Redirect::back()->withInput();
		}
}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /user/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
		Log::info(Input::all());
		$result = $this->validateAndSave($user);
		
		if($result) {
			Session::flash('successMessage', 'Your user has been saved.');
			return Redirect::action('UsersController@show', $user ->id);
		} else {
			Session::flash('errorMessage', 'user not saved');
			return Redirect::back()->withInput();
		}

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		return Redirect::action('HomeController@showWelcome');
	}

	protected function validateAndSave($user)
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()) {
	        // validation failed, redirect to the tutorial create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Validation failed');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->tut_modal = true;
			$user->qa_modal = true;

			return $user->save();	
		}
	}


}