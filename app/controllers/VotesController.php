<?php

class VotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /votes
	 *
	 * @return Response
	 */
	public function index()
	{
		// 
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /votes
	 *
	 * @return Response
	 */
	public function addVote($id, $type)
	{
		// 
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /votes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateVote($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /votes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete to softDeletes()
	}

	protected function validateAndSave()
	{
		//
	}
}