<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homePageController extends Controller
{
    //
    public function index(){
        return view('welcome',[
            'page_title' => 'Stoneworx | Home',
            'subtitle' => 'Stoneworx. Masters of stone and granite artistry.',
            'title' => 'ELEGANCE, SET IN <span style="color:red">STONE</span>.'
           

        ]);
    }

    public function about(){
        return view('about',[
            'page_title' => 'Stoneworx | About',
            'subtitle' => 'Who we are',
            'title' => 'About'


        ]);
    }


}
