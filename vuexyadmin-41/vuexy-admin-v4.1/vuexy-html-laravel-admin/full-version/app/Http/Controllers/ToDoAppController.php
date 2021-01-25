<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoAppController extends Controller
{
    // ToDo App
    public function todoApp(){
      $pageConfigs = [
          'pageHeader' => false,
          'contentLayout' => "content-left-sidebar",
          'bodyClass' => 'todo-application',
      ];

      return view('/pages/app-todo', [
          'pageConfigs' => $pageConfigs
      ]);
    }
}
