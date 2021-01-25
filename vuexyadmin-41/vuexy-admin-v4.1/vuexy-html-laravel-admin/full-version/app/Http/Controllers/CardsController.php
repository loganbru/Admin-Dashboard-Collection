<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    // Card Basic
    public function card_basic(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Card"], ['name'=>"Basic Card"]
      ];
      return view('/pages/card-basic', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Card Advance
    public function card_advance(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Card"], ['name'=>"Advance Card"]
      ];
      return view('/pages/card-advance', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Card Statistics
    public function card_statistics(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Card"], ['name'=>"Statistics Card"]
      ];
      return view('/pages/card-statistics', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Card Analytics
    public function card_analytics(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Card"], ['name'=>"Analytics Card"]
      ];
      return view('/pages/card-analytics', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Card Actions
    public function card_actions(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Card"], ['name'=>"Card Actions"]
      ];
      return view('/pages/card-actions', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

}
