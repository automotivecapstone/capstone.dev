<?php

class QasController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of qas
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');

		if ($search) {
			$query = Qa::with('user')->where('title', 'LIKE', '%' . $search . '%')->orWhere('body', 'LIKE', '%' . $search . '%');
		} else {
			$query = Qa::with('user');
		}

		$qas = $query->orderBy('created_at', 'desc')->paginate(4);

		return View::make('qas.index')->with(['qas' => $qas, 'search' => $search]);
	}

	/**
	 * Show the form for creating a new qa
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('qas.create');
	}

	/**
	 * Store a newly created qa in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$qa = new Qa();
		Session::flash('successMessage', 'Your post has been saved.');
		Log::info(Input::all());
		return $this->validateAndSave($qa);
	}

	/**
	 * Display the specified qa.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$qa = Qa::find($id);
		if(!$qa) {
			App::abort(404);
		}

		return View::make('qas.show')->with('qa', $qa);
	}

	/**
	 * Show the form for editing the specified qa.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$qa = Qa::find($id);

		return View::make('qas.edit')->with('qa', $qa);
	}

	/**
	 * Update the specified qa in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$qa = Qa::find($id);

		return $this->validateAndSave($qa);
	}

	/**
	 * Remove the specified qa from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$qa = Qa::destroy($id);
		$qa->delete();
		Session::flash('successMessage', 'Your post has been deleted.');
		return Redirect::route('qas.index');
	}

	protected function validateAndSave($qa)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$qa->title = Input::get('title');
			$qa->body = Input::get('body');
			$qa->user_id = Auth::id();

			$result = $qa->save();

			if($result) {
				Session::flash('successMessage', 'Your post has been saved.');
				return Redirect::action('QasController@show', $qa->id);
			} else {
				return Redirect::back()->withInput();
			}
		}
	}

}
