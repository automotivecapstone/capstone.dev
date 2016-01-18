<?php

class TutorialsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of tutorials
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		
		if ($search) {
			$query = Tutorial::with('user')->where('title', 'LIKE', '%' . $search . '%')->orWhere('body', 'LIKE', '%' . $search . '%');
		} else {
			$query = Tutorial::with('user');
		}

		$tutorials = $query->orderBy('created_at', 'desc')->paginate(4);

		return View::make('tutorials.index')->with(['tutorials' => $tutorials, 'search' => $search]);
	}

	/**
	 * Show the form for creating a new tutorial
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tutorials.create');
	}

	/**
	 * Store a newly created tutorial in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tutorial = new Tutorial();
		Session::flash('successMessage', 'Your post has been saved.');
		Log::info(Input::all());
		return $this->validateAndSave($tutorial);
	}

	/**
	 * Display the specified tutorial.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tutorial = Tutorial::find($id);
		if(!$tutorial) {
			App::abort(404);
		}

		return View::make('tutorials.show')->with('tutorial', $tutorial);
	}

	/**
	 * Show the form for editing the specified tutorial.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tutorial = Tutorial::find($id);
		return View::make('tutorials.edit')->with('tutorial', $tutorial);
	}

	/**
	 * Update the specified tutorial in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tutorial = Tutorial::find($id);
		return $this->validateAndSave($tutorial);
	}

	/**
	 * Remove the specified tutorial from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tutorial = Tutorial::find($id);
		$tutorial->delete();
		Session::flash('successMessage', 'Your tutorial has been deleted.');
		return Redirect::action('tutorials.index');
	}

}
