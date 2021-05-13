<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use View;

class MailController extends Controller
{
    public function sendMail(){
        
        $blog_post = [
            'title' => '10 Recipes with Vegetable Broth',
            'body' => 'This is demo'
        ]; 

        Mail::to("testlaravel81@gmail.com")->send(new NotifyAdmin($blog_post));      
        return View::make('mail.notification');
        //return "Mail Send to admin";
    }
}
