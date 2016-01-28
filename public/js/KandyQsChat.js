/**
 * Callback when login successfully
 */
window.login_success_callback = function () {
    changeUIState('LOGGED_IN');
}

/**
 * Callback when login fail
 */
window.login_failed_callback = function () {
    $("#loading h2").html("Failed to load Kandy components. Please contact admin for detail.")
}

/**
 * Change User State
 * @param state
 */
window.changeUIState = function(state) {
    switch (state) {
        case 'LOGGED_OUT':
            $('.kandyChat .kandyMessages').empty();
            emptyContact();

            break;
        case 'LOGGED_IN':
            $("#loading").hide();
            $("#chat-wrapper").show();
            break;
    }
}