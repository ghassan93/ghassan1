<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }



    public function showString(){



        return 'hi ghassan';
    }
}
