<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    // Component Alert
    public function alert(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Alerts"]
        ];
        return view('/pages/component-alert', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Buttons
    public function buttons(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Buttons"]
        ];
        return view('/pages/component-buttons', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Breadcrumbs
    public function breadcrumbs(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Breadcrumbs"]
        ];
        return view('/pages/component-breadcrumbs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Carousel
    public function carousel(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Carousel"]
        ];
        return view('/pages/component-carousel', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Collapse
    public function collapse(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Collapse"]
        ];
        return view('/pages/component-collapse', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Dropdowns
    public function dropdowns(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Dropdowns"]
        ];
        return view('/pages/component-dropdowns', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component List Group
    public function list_group(){
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"List Group"]
        ];
        return view('/pages/component-list-group', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Modals
    public function modals(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Modal"]
      ];
      return view('/pages/component-modals', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Pagination
    public function pagination(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Pagination"]
      ];
      return view('/pages/component-pagination', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Navs
    public function navs(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Navs"]
      ];
      return view('/pages/component-navs', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Navbar
    public function navbar(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Navbar"]
      ];
      return view('/pages/component-navbar', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Tabs
    public function tabs(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Tabs"]
      ];
      return view('/pages/component-tabs', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Pills
    public function pills(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Pills"]
      ];
      return view('/pages/component-pills', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Tooltips
    public function tooltips(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Tooltips"]
      ];
      return view('/pages/component-tooltips', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Popovers
    public function popovers(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Popovers"]
      ];
      return view('/pages/component-popovers', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Badges
    public function badges(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Badges"]
      ];
      return view('/pages/component-badges', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Pill Badges
    public function pill_badges(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Pill Badges"]
      ];
      return view('/pages/component-pill-badges', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Progress
    public function progress(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Progress"]
      ];
      return view('/pages/component-progress', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Media Objects
    public function media_objects(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Media Objects"]
      ];
      return view('/pages/component-media-objects', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Spinner
    public function spinner(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Spinner"]
      ];
      return view('/pages/component-spinner', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Component Toast
    public function toast(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Components"], ['name'=>"Toast"]
      ];
      return view('/pages/component-toast', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }
}
