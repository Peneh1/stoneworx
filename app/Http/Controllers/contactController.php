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

    public function handle_request(Request $request){

        $form = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        

        return redirect('/contact#contact')->with('success', 'Thank you for getting in touch!<br>

        We appreciate you contacting us about <b>' . $request->subject . '</b>.<br> One of our customer happiness members will be getting back to you shortly. <br> Have a great day!');
        

    }
}
