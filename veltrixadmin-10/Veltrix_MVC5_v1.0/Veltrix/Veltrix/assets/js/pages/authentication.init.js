/*
Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Email summernote Js File
*/

$(document).ready(function () {
    ValidateLogin();
});

function fnIsUndefinedOREmpty(value) {
    if (value === undefined || value === null || value === 'undefined' || value === '')
        return true;
    return false;
}

function ValidateLogin() {
    var currentUserName = localStorage.getItem("username");
    var currentPassword = localStorage.getItem("password");

    if (fnIsUndefinedOREmpty(currentUserName) || fnIsUndefinedOREmpty(currentPassword)) {
        window.location.href = "/Pages/pages-login";
    }
}