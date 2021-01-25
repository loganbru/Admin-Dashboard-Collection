<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceAppController extends Controller
{
    // Ecommerce Shop
    public function ecommerce_shop(){
      $pageConfigs = [
          'contentLayout' => "content-detached-left-sidebar",
          'bodyClass' => 'ecommerce-application',
      ];

      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"eCommerce"], ['name'=>"Shop"]
      ];

      return view('/pages/app-ecommerce-shop', [
          'pageConfigs' => $pageConfigs,
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // Ecommerce Details
    public function ecommerce_details(){
        $pageConfigs = [
            'bodyClass' => 'ecommerce-application',
        ];
  
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"eCommerce"], ['name'=>"Product Details"]
        ];
  
        return view('/pages/app-ecommerce-details', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
      }

    // Ecommerce Wish List
    public function ecommerce_wishlist(){
        $pageConfigs = [
            'bodyClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"eCommerce"], ['name'=>"Wish List"]
        ];
  
        return view('/pages/app-ecommerce-wishlist', [
          'pageConfigs' => $pageConfigs,
          'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Checkout
    public function ecommerce_checkout(){
        $pageConfigs = [
            'bodyClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"eCommerce"], ['name'=>"Checkout"]
        ];
  
        return view('/pages/app-ecommerce-checkout', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
