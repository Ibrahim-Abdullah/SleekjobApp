$(function () {
   $('.chosen-select').chosen();
});

//MAIN JAVASCRIPT FUNCTIONS
//function to make ajax calls
/*
 * 
 * @param {type} url
 * @param {type} async
 * @param {type} type
 * @param {type} data
 * @param {type} successMessage
 * @param {type} errorMessage
 * @param {type} beforeSendMessage
 * @returns {undefined}
 */
function make_ajax_all(url, async, type, data, beforeSend,successMessage, errorMessage,complpeteMessage) {
    jQuery.ajax({
        url: url,
        data: data,
        type: type,
        async: async,
        beforeSend: beforeSend,
        success: successMessage,
        error: errorMessage,
        complete: complpeteMessage
    });
}

function get_json_data(url, dataFunction) {
    $.getJSON(url, dataFunction);
}

/*
 * FUNCTION TO HANDLE PAGE LOADS
 * 
 */
function page_load(load_into, load_from) {
    $(load_into).load(load_from, function () {
        console.log("Done Loading");
    });
}

/*
 * @param String $msg
 * @returns {undefined}
 */
function display_error_message(msg) {
    $().toastmessage('showErrorToast', msg);
}

/*
 * @param String $msg
 * @returns {undefined}
 */
function display_success_message(msg) {
    $().toastmessage('showSuccessToast', msg);
}

/*
 * FUNCTION TO TEST EMAIL VALIDITY
 * @param {type} email
 * @returns {Boolean}
 */
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

/**
 * CLEAR FORM
 */
function clear_form(id){
    $(id).find("input, textarea").val("");
}
