<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function content(){

        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],['link'=>"dashboard-analytics",'name'=>"Starter Kit"], ['name'=>"Content Layout"]
        ];

        return view('/pages/content-layout', [
            'breadcrumbs' => $breadcrumbs

        ]);

    }

    public function full(){
        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true
        ];

        return view('/pages/full-layout', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}

