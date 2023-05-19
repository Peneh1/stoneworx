<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    //
    public function portfolio(){

        $portfolio = Portfolio::data();

        return view('portfoilio',[
            'page_title' => 'Stoneworx | Portfoilio',
            'subtitle' => 'StoneWorx',
            'title' => 'Portfoilio',
            'portfolios' => $portfolio,
            
        ]);
    }

    public function show_portfolio(Request $request){

        $portfolios = Portfolio::data();

        if(!array_key_exists($request->id, $portfolios)):
            return abort(404);
        endif;

        $portfolio = $portfolios[$request->id];

        


        return view('show_portfoilio',[
            'page_title' => 'Stoneworx | Portfoilio',
            'subtitle' => 'StoneWorx',
            'title' => 'Portfoilio',
            'portfolio' => $portfolio,
            
        ]);
    }
}
