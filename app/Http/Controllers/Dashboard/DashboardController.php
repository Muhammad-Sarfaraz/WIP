<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   protected $arr=['admin/dashboard','client/dashbaord','worker/dashboard'];

   public function dashboard(){

    $user=1;
    $array=['admin/dashboard','client/dashbaord','worker/dashboard'];

    return view($array[$user]);

   }

   public function a(){

    $user=0;

    return view($this->arr[$user]);

   }
   public function c(){

    $user=1;
   
    return view($this->arr[$user]);

   }
   public function w(){

    $user=2;

    return view($this->arr[$user]);

   }

   
}
