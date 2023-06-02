<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;

class brandsController extends Controller
{
    //
    public function brands(){

        $brands = Brands::data();

        return view('brands',[
            'page_title' => 'Stoneworx | Brands',
            'subtitle' => 'Brands we carry',
            'title' => 'Brands',
            'brands' => $brands,
            'style' => 'affix-top'
        ]);
    }
}
