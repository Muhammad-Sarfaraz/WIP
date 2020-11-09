<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayController extends Controller
{
   public function dashboard(){

    $user=1;
    $array=['admin/dashboard','client/dashbaord','worker/dashboard'];

    return view($array[$user]);

   }
   
}
