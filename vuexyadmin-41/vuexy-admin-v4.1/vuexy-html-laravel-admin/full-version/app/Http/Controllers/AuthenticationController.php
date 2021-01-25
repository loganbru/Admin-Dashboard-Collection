<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    // Login
    public function login(){
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true
        ];

        return view('/pages/auth-login', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Register
    public function register(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-register', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Forgot Password
    public function forgot_password(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-forgot-password', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Reset Password
    public function reset_password(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-reset-password', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Lock Screen
    public function lock_screen(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/auth-lock-screen', [
          'pageConfigs' => $pageConfigs
      ]);
    }
}
