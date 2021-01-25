<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    // Sweet Alert
    public function sweet_alert(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Sweet Alert"]
      ];
      return view('/pages/ext-component-sweet-alerts', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Toastr
    public function toastr(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Toastr"]
      ];
      return view('/pages/ext-component-toastr', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // NoUi Slider
    public function noui_slider(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"NoUi Slider"]
      ];
      return view('/pages/ext-component-noui-slider', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // File Uploader
    public function file_uploader(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"File Uploader"]
      ];
      return view('/pages/ext-component-file-uploader', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Quill Editor
    public function quill_editor(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Quill Editor"]
      ];
      return view('/pages/ext-component-quill-editor', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Drag Drop
    public function drag_drop(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Drag & Drop"]
      ];
      return view('/pages/ext-component-drag-drop', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Tour
    public function tour(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Tour"]
      ];
      return view('/pages/ext-component-tour', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Clipboard
    public function clipboard(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Clipboard"]
      ];
      return view('/pages/ext-component-clipboard', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Media Player
    public function plyr(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Media player"]
      ];
      return view('/pages/ext-component-plyr', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Context Menu
    public function context_menu(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Context Menu"]
      ];
      return view('/pages/ext-component-context-menu', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // I18n
    public function i18n(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"I18n"]
      ];
      return view('/pages/ext-component-i18n', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    public function swiper(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Extensions"], ['name'=>"Swiper"]
        ];
        return view('/pages/ext-component-swiper', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
