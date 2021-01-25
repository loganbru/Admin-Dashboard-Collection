<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    // User List Page
    public function user_list(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Pages"], ['name'=>"User List"]
      ];
      return view('/pages/app-user-list', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // User View Page
    public function user_view(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Pages"], ['name'=>"User View"]
      ];
      return view('/pages/app-user-view', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // User Edit Page
    public function user_edit(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Pages"], ['name'=>"User Edit"]
      ];
      return view('/pages/app-user-edit', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

}
