<?php

use League\CommonMark\CommonMarkConverter;

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
			$query = Tutorial::with('user')->where('title', 'LIKE', '%' . $search . '%')->orWhere('content', 'LIKE', '%' . $search . '%');
		} else {
			$query = Tutorial::with('user');
		}

		$tutorials = $query->orderBy('created_at', 'desc')->paginate(30);

		return View::make('tutorials.index')->with(['tutorials' => $tutorials, 'search' => $search]);
	}

	/**
	 * Show the form for creating a new tutorial
	 *
	 * @return Response
	 */
	public function create()
	{
		$converter = new CommonMarkConverter();
		$tags = Tag::with('tutorials','qas')->get();
		// return View::make('tutorials.create');
		return View::make('tutorials.create', compact('tags', 'converter'));

	}

	/**
	 * Store a newly created tutorial in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tutorial = new Tutorial();
		Session::flash('successMessage', 'Your tutorial has been saved.');
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
		$converter = new CommonMarkConverter();
		$tutorial = Tutorial::find($id);
		if(!$tutorial) {
			App::abort(404);
		}

		// return View::make('tutorials.show')->with('tutorial', $tutorial);
		return View::make('tutorials.show', compact('tutorial', 'converter'));

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
		if(Auth::id()!= $tutorial->user_id){
			return Redirect::action('tutorials.index');
		}
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

	protected function validateAndSave($tutorial)
	{
		$validator = Validator::make(Input::all(), Tutorial::$rules);

		if ($validator->fails()) {
			dd($validator->messages());
	        // validation failed, redirect to the tutorial create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	    	
			$tutorial->title = Input::get('title');
			$tutorial->content = Input::get('content');

	    	$image = Input::file('image');
			if ($image) {
				$filename = $image->getClientOriginalName();
				$tutorial->image = '/uploaded/' . $filename;
				$image->move('uploaded/', $filename);
			}

			$video = Input::file('video');
			if ($video) {
				$filenameVideo = $video->getClientOriginalName();
				$tutorial->video = '/uploaded/' . $filenameVideo;
				$video->move('uploaded/', $filenameVideo);
			}
			


			$tutorial->user_id = Auth::id();

			$result = $tutorial->save();

			$tutorialtags = Input::has('tuttags') ? Input::get('tuttags') : array();
			$tutorial->tags()->sync($tutorialtags);
			$tutorial->save();

			if($result) {
				Session::flash('successMessage', 'Your tutorial has been saved.');
				return Redirect::action('TutorialsController@show', $tutorial->id);
			} else {
				return Redirect::back()->withInput();
			}
		}
	}

}
