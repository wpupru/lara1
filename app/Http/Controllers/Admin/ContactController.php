<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

    /*protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }*/

    public function show(Request $request, $id=FALSE) {

     //  print_r($request->all());
    // $array = print_r($request->only('name','email'));
     $array = print_r($request->except('name','email'));
    // print_r($array);
     //  echo '<h1 style="margin-top: 100px">'.$request->input('одгождгожщщж','Введите правильные данные').'</h1>';

       /* if($request->has('name')){
            echo '<h1 style="margin-top: 100px">'.$request->input('name','Введите правильные данные').'</h1>';
        }*/

       // echo '<h1 style="margin-top: 100px">'.$request->path().'</h1>';
      //  echo '<h1 style="margin-top: 100px">'.$request->url().'</h1>';
        echo '<h1 style="margin-top: 100px">'.$request->method().'</h1>';

        return view('default.contact', ['title' => 'Contacts']);
    }



}