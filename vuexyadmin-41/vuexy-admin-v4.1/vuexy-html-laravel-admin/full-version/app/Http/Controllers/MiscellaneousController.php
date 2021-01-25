<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    // Coming Soon
    public function coming_soon(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/page-coming-soon', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Error-404
    public function error_404(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/error-404', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Error-500
    public function error_500(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/error-500', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Not-authorized
    public function not_authorized(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/page-not-authorized', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    // Maintenance
    public function maintenance(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      return view('/pages/page-maintenance', [
          'pageConfigs' => $pageConfigs
      ]);
    }
}
