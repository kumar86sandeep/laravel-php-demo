<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class TemplateController extends Controller
{
    
	public function faq()
    {
        return view('template.faq');
    }
	
	public function about()
    {
        return view('template.about');
    }
	
	public function products20()
    {
        return view('template.products-20');
    }
	public function products40()
    {
        return view('template.products-40');
    }
	public function products45()
    {
        return view('template.products-45');
    }
	public function products53()
    {
        return view('template.products-53');
    }
	public function productscustomsize()
    {
        return view('template.products-customsize');
    }
	
    public function getQuote(Request $request)
    {
        
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailable($request->post(), 'getQuoteAdmin')); // Mail To Admin
        Mail::to($request->post('getquote_email'))->send(new SendMailable($request->post(), 'getQuote'));  // Mail To User
       
        return redirect('/')->with('message', 'Thank you for contacting us. We will revert you back shortly.');
    }
	
    public function contactUs(Request $request)
    {
        //echo "<pre>"; print_r($request->post()); echo "</pre>"; die('here');
        Mail::to(env('ADMIN_EMAIL'))->send(new SendMailable($request->post(), 'contactUsAdmin')); // Mail To Admin
		
        Mail::to($request->post('contactus_email'))->send(new SendMailable($request->post(), 'contactUs'));  // Mail To User
       
        return redirect('/')->with('message', 'Thank you for contacting us. We will revert you back shortly.');
    }
    

}
