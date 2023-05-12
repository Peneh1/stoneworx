<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    //
    public function portfolio(){

        return view('portfoilio',[
            'page_title' => 'Stoneworx | Portfoilio',
            'subtitle' => 'StoneWorx',
            'title' => 'Portfoilio',
            
        ]);
    }
}
