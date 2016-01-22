@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/css/show_qa_tutorial.css">

@stop

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				{{ Form::open(array('action' => array('TutorialsController@destroy', $tutorial->id, 'files' => true), 'method' => 'DELETE')) }}
				
					<a href="{{{ action('TutorialsController@edit', $tutorial->id) }}}" class="btn btn-info">Edit</a>

					{{-- <a href="{{{ action('TutorialsController@editImage', $tutorial->id) }}}" class="btn btn-info">Edit Image</a> --}}

					<button class="btn btn-danger">Delete</button>

				{{ Form::close() }}

				<h1>{{{ $tutorial->title }}}</h1>

				<img src="{{{ $tutorial->image }}}" class="col-md-offset-2 col-md-8 tutorial-image">

				<video width="400" controls>
					<source src="{{{ $tutorial->video }}}" type="video/mp4">
					Your browser does not support HTML5 video.
				</video>
				
				<blockquote>
					<p>{{{ $tutorial->content }}}</p>
					<footer>Created by {{{ $tutorial->user->username }}}, {{{ $tutorial->updated_at->diffForHumans() }}}</footer>
				</blockquote>

				{{ Form::open(array('action' => 'CommentsController@store')) }}
						{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
						{{ Form::label('content', 'Comment') }}
					<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
						{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Your comments']) }}
					</div>
					<div class="form-group">
						<input type="hidden" name="tutorial_id" value="{{{$tutorial->id}}}">
						<button class="btn btn-default" id="submit">Add</button>
					</div>
				{{ Form::close() }}

				<div class="detailBox">
					<div class="titleBox">
						<label>Comments</label>
					</div>
					<div class="commentBox">
						<p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					<div class="">
						<ul class="list-group">
							@foreach ($tutorial->comments as $comment)
								<li class="list-group-item">
									<div class="commenterImage">
										<img src="{{{ $comment->user->image }}}" class="img">
										{{{ $comment->user->username }}}
									</div>
									<div class="commentText">
										<blockquote>
											<p>{{{ $comment->content }}}</p>
											<footer>{{{ $comment->created_at->diffForHumans() }}}</footer>
										</blockquote>
									</div>
								</li>
							@endforeach
						</ul>

					</div>
				</div>

					{{-- Disqus --}}
					{{-- <?php
						define('DISQUS_SECRET_KEY', '123456');
						define('DISQUS_PUBLIC_KEY', 'abcdef');
						 
						$data = array(
						        "id" => Auth::id(),
						        "username" => Auth::user()->username,
						        "email" => Auth::user()->email
						    );
						 
						function dsq_hmacsha1($data, $key) {
						    $blocksize=64;
						    $hashfunc='sha1';
						    if (strlen($key)>$blocksize)
						        $key=pack('H*', $hashfunc($key));
						    $key=str_pad($key,$blocksize,chr(0x00));
						    $ipad=str_repeat(chr(0x36),$blocksize);
						    $opad=str_repeat(chr(0x5c),$blocksize);
						    $hmac = pack(
						                'H*',$hashfunc(
						                    ($key^$opad).pack(
						                        'H*',$hashfunc(
						                            ($key^$ipad).$data
						                        )
						                    )
						                )
						            );
						    return bin2hex($hmac);
						}
						 
						$message = base64_encode(json_encode($data));
						$timestamp = time();
						$hmac = dsq_hmacsha1($message . ' ' . $timestamp, DISQUS_SECRET_KEY);
					?> --}}

					{{-- Disqus --}}
					{{-- <div id="disqus_thread"></div> --}}
					// <script>
						/**
						* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
						*/
						// var disqus_config = function () {
						// 	this.page.url = "{{ Request::url() }}"; // Replace PAGE_URL with your page's canonical URL variable
						// 	this.page.identifier = "{{ Request::path() }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						// };
						
						// (function() { // DON'T EDIT BELOW THIS LINE
						// 	var d = document, s = d.createElement('script');

						// 	s.src = '//greasemonkey.disqus.com/embed.js';

						// 	s.setAttribute('data-timestamp', +new Date());
						// 	(d.head || d.body).appendChild(s);
						// })();
					// </script>
					// <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>	
					// <script id="dsq-count-scr" src="//autocapstone.disqus.com/count.js" async></script>

				
				
			</div>
		</div>
	</div>

@stop

@section('bottom-script')

	<script src="/js/show_qa_tutorial.js"></script>

@stop




