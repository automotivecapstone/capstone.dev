<?php

class TutorialsController extends \BaseController {

	/**
	 * Display a listing of tutorials
	 *
	 * @return Response
	 */
	public function index()
	{
		$tutorials = Tutorial::all();

		return View::make('tutorials.index', compact('tutorials'));
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
		$validator = Validator::make($data = Input::all(), Tutorial::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tutorial::create($data);

		return Redirect::route('tutorials.index');
	}

	/**
	 * Display the specified tutorial.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tutorial = Tutorial::findOrFail($id);

		return View::make('tutorials.show', compact('tutorial'));
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

		return View::make('tutorials.edit', compact('tutorial'));
	}

	/**
	 * Update the specified tutorial in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tutorial = Tutorial::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tutorial::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tutorial->update($data);

		return Redirect::route('tutorials.index');
	}

	/**
	 * Remove the specified tutorial from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tutorial::destroy($id);

		return Redirect::route('tutorials.index');
	}

}
