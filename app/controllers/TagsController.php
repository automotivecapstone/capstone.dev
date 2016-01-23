<?php

class TagsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of tags
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		
		if ($search) {
			$query = Tag::with('user')->where('title', 'LIKE', '%' . $search . '%')->orWhere('body', 'LIKE', '%' . $search . '%');
		} else {
			$query = Tag::with('user');
		}

		$query = $query->orderBy('created_at', 'desc');

		if (Request::wantsJson()){
			$tags = $query->get();
			return Response::json(['tags'=>$tags]);
		} else{
			$tags = $query->paginate(4);
			return View::make('tags.index')->with(['tags' => $tags, 'search' => $search]);
		}

	}

	/**
	 * Show the form for creating a new tag
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tags.create');
	}

	/**
	 * Store a newly created tag in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tag = new Tag();
		Session::flash('successMessage', 'Your post has been saved.');
		Log::info(Input::all());
		return $this->validateAndSave($tag);
	}

	/**
	 * Display the specified tag.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tag = Tag::find($id);
		if(!$tag) {
			App::abort(404);
		}

		return View::make('tags.show')->with('tag', $tag);
	}

	/**
	 * Show the form for editing the specified tag.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tag = Tag::find($id);
		return View::make('tags.edit')->with('tag', $tag);
	}

	/**
	 * Update the specified tag in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tag = Tag::find($id);
		return $this->validateAndSave($tag);
	}

	/**
	 * Remove the specified tag from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tag = Tag::find($id);
		$tag->delete();
		Session::flash('successMessage', 'Your post has been deleted.');
		return Redirect::action('tags.index');
	}

	protected function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Tag::$rules);

		if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$tag->title = Input::get('title');
			$tag->body = Input::get('body');
			$tag->user_id = Auth::id();

			$result = $post->save();

			$qatags = Input::has('addtags') ? Input::get('addtags') : array();
			$qa->tags()->sync($qatags);
			$qa->save();

			if($result) {
				Session::flash('successMessage', 'Your post has been saved.');
				return Redirect::action('TagsController@show', $tag->id);
			} else {
				return Redirect::back()->withInput();
			}
		}
	}

}
