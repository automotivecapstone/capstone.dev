<?php

class QasController extends \BaseController {

	/**
	 * Display a listing of qas
	 *
	 * @return Response
	 */
	public function index()
	{
		$qas = Qa::all();

		return View::make('qas.index', compact('qas'));
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
		$validator = Validator::make($data = Input::all(), Qa::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Qa::create($data);

		return Redirect::route('qas.index');
	}

	/**
	 * Display the specified qa.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$qa = Qa::findOrFail($id);

		return View::make('qas.show', compact('qa'));
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

		return View::make('qas.edit', compact('qa'));
	}

	/**
	 * Update the specified qa in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$qa = Qa::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Qa::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$qa->update($data);

		return Redirect::route('qas.index');
	}

	/**
	 * Remove the specified qa from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Qa::destroy($id);

		return Redirect::route('qas.index');
	}

}
