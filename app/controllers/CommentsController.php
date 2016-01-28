<?php
use Mailgun\Mailgun;



class CommentsController extends \BaseController {

	/**
	 * Display a listing of comments
	 *
	 * @return Response
	 */
	public function index()
	{
		$comments = Comment::all();

		return View::make('comments.index', compact('comments'));
	}

	/**
	 * Show the form for creating a new comment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('comments.create');
	}

	/**
	 * Store a newly created comment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$comment = new Comment();
		return $this->validateAndSave($comment);


	}

	/**
	 * Display the specified comment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$comment = Comment::findOrFail($id);

		return View::make('comments.show', compact('comment'));
	}

	/**
	 * Show the form for editing the specified comment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comment = Comment::find($id);

		return View::make('comments.edit', compact('comment'));
	}

	/**
	 * Update the specified comment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$comment = Comment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Comment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$comment->update($data);

		return Redirect::route('comments.index');
	}

	/**
	 * Remove the specified comment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Comment::destroy($id);

		return Redirect::route('comments.index');
	}

	protected function validateAndSave($comment)
	{
		$validator = Validator::make(Input::all(), Comment::$rules);

		if ($validator->fails()) {
	        // validation failed, redirect to the comment create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	    	$comment->content = Input::get('content');
			$comment->user_id = Auth::id();
			$comment->qa_id = Input::get('qa_id');
			$comment->tutorial_id = Input::get('tutorial_id');
			$result = $comment->save();

			if($result){
				$this->sendNotificationEmail($comment);
			}

			if($result) {
				if (Input::has('qa_id'))
				{
					Session::flash('successMessage', 'Your comment has been saved.');
					return Redirect::action('QasController@show', Input::get('qa_id'));
				}
					else {
					Session::flash('successMessage', 'Your comment has been saved.');
					return Redirect::action('TutorialsController@show', Input::get('tutorial_id'));
				}
				} else {
				return Redirect::back()->withInput();
			}
		}
	}

	protected function sendNotificationEmail($comment)
	{

		$user = $comment->tutorial->user;

		$text = "Someone responded to your post!";

		return Mail::send('emails.notification', ['user' => $user], function ($m) use ($user) {
            $m->from('postmaster@sandbox8db08a1a17a44e4b83110e3242bbf4ca.mailgun.org', 'Your Application');

            $m->to($user->email)->subject('Notification from GreaseMonkey!');;
        });
	
	}
	
}
