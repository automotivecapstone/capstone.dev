<div class="help-container">
	<a href=""><i class="fa fa-comment fa-3x"></i></a>
</div>

@if(Auth::check())
{{ KandyLaravel::init(Auth::id()) }}
{{ HTML::style('assets/css/KandyQsVoice.css') }}
{{ HTML::script('/assets/js/kandy/KandyQsVoice.js') }}
<div>
    <h2>Make a Voice Call</h2>

    <h4>This sample application demonstrates the code for initiating a voice call with kandy </h4>

    <div id="loading"><h2>Loading Kandy Components ...</h2></div>
    <div id="voiceCallWrapper" style="display: none">
        {{KandyButton::voiceCall(array(
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
            ))
        }}

        {{KandyButton::pstnCall(array(
            "id" => "kandyPsntCall",
                "class" => "myButtonStyle",
                "htmlOptions" => array("style" => "margin-top: 10px;border: 1px solid #ccc;"),
                "options" => array(
                    "callOut"      => array(
                        "id"       => "callOut",
                        "label"    => "Number to call",
                        "btnLabel" => "Call",
                        'type'     => 'text',
                        'desc'     => 'Phone number'
                    ),
                    "calling"      => array(
                        "id"       => "calling",
                        "label"    => "Calling...",
                        "btnLabel" => "End Call"
                    ),
                    "onCall"       => array(
                        "id"       => "onCall",
                        "label"    => "You're connected!",
                        "btnLabel" => "End Call"
                    ),
                )
            ))
        }}

         {{KandyButton::pstnCall(array(
                "id" => "contactUs",
                    "class" => "myButtonStyle",
                    "htmlOptions" => array("style" => "margin-top: 10px;border: 1px solid #ccc;"),
                    "options" => array(
                        "callOut"      => array(
                            "id"       => "callOut",
                            "label"    => "Call us (phone number)",
                            "btnLabel" => "Call",
                            'type'     => 'hidden',
                            'desc'     => 'Phone number',
                            'value'    => '84932098386'
                        ),
                        "calling"      => array(
                            "id"       => "calling",
                            "label"    => "Calling...",
                            "btnLabel" => "End Call"
                        ),
                        "onCall"       => array(
                            "id"       => "onCall",
                            "label"    => "You're connected!",
                            "btnLabel" => "End Call"
                        ),
                    )
                ))
            }}

            {{KandyButton::voiceCall(array(
                "id" => "contacUsUsername",
                    "class" => "myButtonStyle",
                    "htmlOptions" => array("style" => "margin-top: 10px;border: 1px solid #ccc;"),
                    "options" => array(
                        "callOut"      => array(
                            "id"       => "callOut",
                            "label"    => "Call us",
                            "btnLabel" => "Call",
                            "value"    => 'khanhhuynh@khanhht.gmail.com',
                            "type"     => 'hidden'
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
                ))
            }}

            {{KandySms::show(
                array(
                    'class'         => 'kandyButton myButtonStyle smsContainer',
                    'htmlAttr'      => array('style' => 'width:40%; margin-top:10px'),
                    'options'       => array(
                        'messageHolder' => 'Enter your message',
                        'numberHolder'  => 'Enter your number',
                        'btnSendId'     => 'btnSendSms',
                        'btnSendLabel'  => 'Send Sms'
                    )

                )
            )}}


    </div>

</div>
@endif
