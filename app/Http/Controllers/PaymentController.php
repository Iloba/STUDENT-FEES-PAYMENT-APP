<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paynow(){
        dd('paynow');
    }

    public function payhalf(){
        dd('payhalf');
    }

    public function payquarter(){
        dd('payquarter');
    }
}
