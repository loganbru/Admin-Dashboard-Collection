/*
Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Session Timeout Js File
*/

$.sessionTimeout({
	keepAliveUrl: '/Pages/pages-blank',
	logoutButton:'Logout',
	logoutUrl: '/Pages/pages-login',
	redirUrl: '/Pages/pages-lock-screen',
	warnAfter: 3000,
	redirAfter: 30000,
	countdownMessage: 'Redirecting in {timer} seconds.'
});