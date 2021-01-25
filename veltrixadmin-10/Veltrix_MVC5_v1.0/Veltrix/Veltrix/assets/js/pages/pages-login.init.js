/*
Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Email summernote Js File
*/


$(document).ready(function () {
    $("#validateMessage").hide();

    // Bind the <input> elements for Parsley validation
    // triggered at data-parsley-trigger="change".
    $('input').parsley();

    // Bind an onclick handler to the <button>
    $('#btnLogin').click(function (event) {
        event.preventDefault();

        // Validate all input fields.
        var isValid = true;
        $('input').each(function () {
            if ($(this).parsley().validate() !== true) isValid = false;
        });

        if (isValid) {
            //You can fetch email and password from db or API here.
            var dbUsername = "admin";
            var dbPassword = "123456";
            var IsValidUser = false;

            var username = $("#username").val();
            var password = $("#userpassword").val();

            if (username === dbUsername && password === dbPassword)
                IsValidUser = true;

            if (IsValidUser) {
                localStorage.setItem("username", dbUsername);
                localStorage.setItem("password", dbPassword);
                fnRemoveValidationMessage();
                window.location.href = "/Dashboard/Index";
            }
            else {
                fnAddValidationMessage();
            }
        }
    });
});

function fnAddValidationMessage() {
    $("#validateMessage").show();
    $("#validateMessage").html("These credentials do not match our records.");
}

function fnRemoveValidationMessage() {
    $("#validateMessage").hide();
    $("#validateMessage").html("");
}
