<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FirstController extends Controller {

    public function show(){
        echo __METHOD__;

     //   echo $id;
    }

    public function getPages(){
        echo 'FirstController - getPages';
    }


}
