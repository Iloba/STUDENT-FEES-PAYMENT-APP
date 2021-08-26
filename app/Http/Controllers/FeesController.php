<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function payfees(){
    
        return view('admin.fees-detail');

    }
}
