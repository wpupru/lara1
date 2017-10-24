<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

    public function show(){
        $data = [
            'title' => 'Контактная форма',
        ];

        if(view()->exists('default.contact')){
      //  return view('default.contact')->with('title', 'Наши контакты');
        return view('default.contact',$data);
        }
        abort(404);
    }
}
