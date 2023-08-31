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

        #send Email
        $to = "office@stoneworxcorp.com, jacob@stoneworxcorp.com";
        $subject = $form['subject'];

        $message = "
            <html>
            <head>   <title>{$form['subject']}</title>    </head>

            <body> 

            <p>{$form['message']}</p>

            <small>This request was submitted thru your website</small>

            </body>
            </html>
        ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: {$form['name']} <{$form['email']}>" . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$mail_sent = mail($to,$subject,$message,$headers);
#end Email

if($mail_sent):
       

        return redirect('/contact#contact')->with('success', 'Thank you for getting in touch!<br>

        We appreciate you contacting us about <b>' . $form['subject'] . '</b>.<br> One of our customer happiness members will be getting back to you shortly. <br> Have a great day!');

else:
    return redirect('/contact#contact')->with('error', 'Error Sending. Try Again Later');

endif;


    }
}
