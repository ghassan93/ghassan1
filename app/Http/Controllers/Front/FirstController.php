<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
  public function getindex()
  {

      /*  $obj = new\stdClass();
        $obj->name=ghassan;
        $obj->gender ='male';*/
      return view('welcomm')->with('name', 'ghassan');
  }
}
