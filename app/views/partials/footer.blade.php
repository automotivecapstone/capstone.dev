<div class="help-container">
	<a href=""><i class="fa fa-comment fa-3x"></i></a>
</div>

{{
    KandyButton::voiceCall(
	    array(
	        "id" => "kandyVideoAnswerButton",
	        "class" => "myButtonStyle",
	        "htmlOptions" => array("style" => "border: 1px solid #ccc;"),
                "options" => array(
                    "callOut"      => array(
	                "id"       => "callOut",
	                "label"    => "User to call",
	                "btnLabel" => "Call"
	            ),
	            "calling"      => array(
                    "id"       => "calling",
	                "label"    => "Calling...",
	                "btnLabel" => "End Call"
	            ),
	            "incomingCall" => array(
	                "id"       => "incomingCall",
	                "label"    => "Incoming Call",
	                "btnLabel" => "Answer"
	            ),
	            "onCall"       => array(
	                "id"       => "onCall",
	                "label"    => "You're connected!",
	                "btnLabel" => "End Call"
	            ),
	        )
	    )
	)
}}