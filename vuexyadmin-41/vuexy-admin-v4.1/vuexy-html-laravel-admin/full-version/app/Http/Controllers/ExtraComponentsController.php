<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraComponentsController extends Controller
{
    // Extra Component - Avatar
    public function avatar(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extra Components"], ['name'=>"Avatar"]
      ];
      return view('/pages/ex-component-avatar', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Extra Component - Chips
    public function chips(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extra Components"], ['name'=>"Chips"]
      ];
      return view('/pages/ex-component-chips', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Extra Component - Divider
    public function divider(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extra Components"], ['name'=>"Divider"]
      ];
      return view('/pages/ex-component-divider', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }
}
