<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //Tourist Site page
    public function payment()
    {

        return view('payment.pay');
    }
}