<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    // Form Elements - Select
    public function select(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Select"]
      ];
      return view('/pages/form-select', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Switch
    public function switch(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Switch"]
      ];
      return view('/pages/form-switch', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Checkbox
    public function checkbox(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Checkbox"]
      ];
      return view('/pages/form-checkbox', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Radio
    public function radio(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Radio"]
      ];
      return view('/pages/form-radio', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Input
    public function input(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Input"]
      ];
      return view('/pages/form-input', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Input-groups
    public function input_groups(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Input Groups"]
      ];
      return view('/pages/form-input-groups', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Number Input
    public function number_input(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Number Input"]
      ];
      return view('/pages/form-number-input', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Textarea
    public function textarea(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Textarea"]
      ];
      return view('/pages/form-textarea', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Elements - Date & time Picker
    public function date_time_picker(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Form Elements"], ['name'=>"Date & Time Picker"]
      ];
      return view('/pages/form-date-time-picker', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Layouts
    public function layouts(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Forms"], ['name'=>"Form Layouts"]
      ];
      return view('/pages/form-layout', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Wizard
    public function wizard(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Forms"], ['name'=>"Wizard"]
      ];
      return view('/pages/form-wizard', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Form Validation
    public function validation(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Forms"], ['name'=>"Validation"]
      ];
      return view('/pages/form-validation', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }
}
