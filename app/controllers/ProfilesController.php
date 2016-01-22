<?php

class ProfilesController extends \BaseController {


	public function changeTutModal($id)
	{
		$user = User::find($id);
		$user->tut_modal = false;
		$user->save();
		return Redirect::action('TutorialsController@create');
	}
}