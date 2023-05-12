<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function contact(){
        return view('contact',[
            'page_title' => 'Stoneworx | Contact',
            'subtitle' => 'StoneWorx',
            'title' => 'Contact'
        ]);
    }
}
