<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Http\Controllers\MainController;
use App\Models\Forms;

class MailController extends Controller
{
    public function __construct(){
        //
    }

    public function sendMail($sendTo, Request $request){
        $mailData = $request->session()->get('data');

        Mail::to($mailData->email)->send(new TestEmail($mailData));

        return redirect('/')->with('mssg','Budeme Vas kontaktovat...');
    }
}
