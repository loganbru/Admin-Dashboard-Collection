/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Timeout Js
 */


$.sessionTimeout({
  keepAliveUrl: '../pages/page-starter.html',
  logoutButton:'Logout',
  logoutUrl: '../authentication/auth-login.html',
  redirUrl: '../authentication/auth-lock-screen.html',
  warnAfter: 3000,
  redirAfter: 30000,
  countdownBar: true
});
