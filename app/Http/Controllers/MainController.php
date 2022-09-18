<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;
use App\Http\Controllers\MailController;

class MainController extends Controller
{
    public $forms;

    public function index() {
        return view('index');
    }

    public function get_forms(){
        $forms = new Forms();

        $forms->name = request('name');
        $forms->email = request('email');
        $forms->phone_number = request('phone_number');
        $forms->message = request('Massage');

        return $forms;
    }

    public function store(Request $request) {
        $forms = $this->get_forms();
            
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'], ['regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/u'],
            'phone_number' => ['regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u'],
        ]);

        $forms->save();

        return redirect(('/sendMail/'. $forms->email))->with('data', $forms);
    }
}
