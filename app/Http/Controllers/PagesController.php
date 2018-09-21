<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "passing variable";
        return view("pages/index",compact('title'));
    }

    public function about(){
        $title = "This is the about page";
        return view("pages/about")->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programming','SEO']
        );
        return view("pages/services")->with($data);
    }
}
