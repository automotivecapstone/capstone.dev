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
		$user = Auth::user();
		return View::make('users.index')->with('user', $user);
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

		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()) {
	        // validation failed, redirect to the tutorial create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Validation failed');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->email = Input::get('email');


			$image = Input::file('image');
			if ($image) {
				$filename = $image->getClientOriginalName();
				$user->image = '/uploaded/' . $filename;
				$image->move('uploaded/', $filename);
			}

			$user->tut_modal = true;
			$user->qa_modal = true;

			$user->save();

			Auth::login($user);
			$user = Auth::user();

			KandyLaravel::createUser($user->username, $user->email, Auth::user()->id);
			KandyLaravel::assignUser(Auth::user()->id, $user->username);

			Session::flash('successMessage', 'Your user has been saved.');
			return Redirect::action('UsersController@show', $user->id);
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
		$tags = Tag::with('tutorials','qas')->get();

		return View::make('users.show', compact('user', 'tags'));
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

		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()) {
	        // validation failed, redirect to the tutorial create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Validation failed');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->email = Input::get('email');

			$image = Input::file('image');
			if ($image) {
				$filename = $image->getClientOriginalName();
				$user->image = '/uploaded/' . $filename;
				$image->move('uploaded/', $filename);
			}

			$user->tut_modal = true;
			$user->qa_modal = true;

			$user->save();

			Auth::login($user);
			$user = Auth::user();

			Session::flash('successMessage', 'Your user has been saved.');
			return Redirect::action('UsersController@show', $user->id);
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


	public function changeTutModal($id)
	{
		$user = User::find($id);
		$user->tut_modal = false;
		$user->save();
		return Response::json(['save'=>true]);

		// return Redirect::action('TutorialsController@create');
	}

	public function changeQaModal($id)
	{
		$user = User::find($id);
		$user->qa_modal = false;
		$user->save();
		return Response::json(['save'=>true]);

		// return Redirect::action('TutorialsController@create');
	}

	public function checkTutModal($id)
	{
		$user=User::find($id);
		return Response::json(['check'=>$user->tut_modal]);
	}

	public function checkQaModal($id)
	{
		$user=User::find($id);
		return Response::json(['check'=>$user->qa_modal]);
	}

	
	


}