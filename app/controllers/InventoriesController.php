<?php

class InventoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /inventories
	 *
	 * @return Response
	 */
	public function index()
	{
		$items=Inventory::all();
		return View::make('inventories.index')->with('items', $items);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /inventories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inventories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /inventories
	 *
	 * @return Response
	 */
	public function store()
	{

	}

	/**
	 * Display the specified resource.
	 * GET /inventories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Inventory::find($id);
		return View::make('inventories.show')->with('item', $item);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /inventories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Inventory::find($id);
		return View::make('inventories.edit')->with('item', $item);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /inventories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /inventories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$item = Inventory::find($id);
		$item->$delete();
	}

}