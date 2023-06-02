<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homePageController extends Controller
{
    //
    public function index(){
        return view('welcome',[
            'page_title' => 'Stoneworx | Home',
            'subtitle' => 'subtitle',
            'title' => 'Stoneworx',
            'style' => ''

        ]);
    }

    public function about(){
        return view('about',[
            'page_title' => 'Stoneworx | About',
            'subtitle' => 'Who we are',
            'title' => 'About',
            'style' => 'affix-top'


        ]);
    }


}
