@extends('layouts.master')

@section('top-script')

@stop

@section('content')
<body>
	<div class="container">
		<hr>

		{{ Form::open(array('action' => array('TutorialsController@destroy', $tutorial->id, 'files' => true), 'method' => 'DELETE')) }}
				
				<a href="{{{ action('TutorialsController@edit', $tutorial->id) }}}" class="btn btn-info">Edit Tutorial</a>

				<button class="btn btn-danger">Delete</button>
		{{ Form::close() }}

				<h3 class="logo">{{{ $tutorial->title }}}</h3>

			@if (isset($tutorial->image))
				<div>
				<img src="{{{ $tutorial->image }}}" class="tutorial-image">
				</div>
			@endif
	
			@if (isset($tutorial->video))
					<!-- HTML5 video tag -->	
				<video controls="controls" poster="img/demo.jpg" width="640" height="360" 
						<!-- .mp4 file for native playback in IE9+, Firefox, Chrome, Safari and most mobile browsers -->
						<source src="{{{ $tutorial->video }}}" type="video/mp4" />
						<source src="{{{ $tutorial->video }}}" type="video/ogg" />
						<source src="{{{ $tutorial->video }}}" type="video/webm" />
						<source src="{{{ $tutorial->video }}}" type="video/m4v" />
						<!-- flash fallback for IE6, IE7, IE8 and Opera -->
						<object type="application/x-shockwave-flash" data="swf/flowplayer-3.2.18.swf" width="640" height="360">
							<param name="movie" value="swf/flowplayer-3.2.18.swf" />
							<param name="allowFullScreen" value="true" />
							<param name="wmode" value="transparent" />
							<!-- note the encoded path to the image and video files, relative to the .swf! -->
							<!-- more on that here: http://en.wikipedia.org/wiki/Percent-encoding -->
							<param name="flashVars" value="config={'playlist':['..%2Fimg%2Fdemo.jpg',{'url':'{{{ $tutorial->video }}}','autoPlay':false}]}" />
							<!-- fallback image if flash fails -->
							<img src="img/demo.jpg" width="640" height="360" title="No Flash found" />
						</object>
				</video>
			@endif
	
			<p>{{{ $tutorial->content }}}</p>
			<p>Created by {{{ $tutorial->user->username }}}, {{{$tutorial->created_at->diffForHumans() }}}</p>
			
			

				{{ Form::open(array('action' => 'CommentsController@store')) }}
						{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
						{{ Form::label('content', 'Add a Comment') }}
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
						<label>Other Comments</label>
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
</body>

@stop

@section('bottom-script')

	<script src="/js/show_qa_tutorial.js"></script>

@stop




