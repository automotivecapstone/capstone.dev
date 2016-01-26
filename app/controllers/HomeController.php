<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getLogin()
	{
		return View::make('login');
	}
	
	public function showProfile()
	{
		return View::make('profile');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			$user = Auth::user();
		    return Redirect::action('UsersController@show', $user->id);
		} else {
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Wrong email or password!');
		    return Redirect::back()->withInput();
		}

	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showWelcome');
	}

	public function addTagsToUser()
	{
		$user = User::find(Auth::id());
		$usertags = Input::has('usertags') ? Input::get('usertags') : array();

		if (Input::has('addtag'))
		{
			$newtag = new Tag();
			$newtag->name =Input::get('addtag');
			$newtag->save();
			array_push($usertags, $newtag->id);
		}
		$user->tags()->sync($usertags);
		$user->save();
		
		return Redirect::action('UsersController@show', $user->id);

	}


	public function search()
	{
		$search = Input::get('search');

	    $searchTerms = explode(' ', $search);

	    $queryTutorial = Tutorial::with('user');
	    $queryQa = Qa::with('user');

	    foreach($searchTerms as $term)
	    {
	        $queryTutorial->where('title', 'LIKE', '%'. $term .'%')
	        ->orWhere('content', 'LIKE', '%' . $term . '%')
	        ->orWhere('description', 'LIKE', '%' . $term . '%');

	       	$queryQa->where('question', 'LIKE', '%'. $term .'%')
	        ->orWhere('content', 'LIKE', '%' . $term . '%');
	    }

	    $resultsTutorial = $queryTutorial->orderBy('created_at', 'desc')->get();
	    $resultsQa = $queryQa->orderBy('created_at', 'desc')->get();

	    return View::make('search')->with(['resultsTutorial' => $resultsTutorial, 'resultsQa' => $resultsQa]);
	}

	public function searchShow($id)
	{
		$tutorial = Tutorial::find($id);
		$qa = Qa::find($id);

		if($tutorial) {
			return Redirect::action('TutorialsController@show', $tutorial->id);
		}

		if($qa) {
			return Redirect::action('QasController@show', $qa->id);
		}

	}

	public function usersHome()
	{
		$user = Auth::user();
		return View::make('timeline')->with('user', $user);

	}

}
