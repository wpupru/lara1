<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller {

    public function show(){
     //   view('template');
        $data = [
            'title' => 'Главная страница',
            'title2' => 'Новая главная страница',
            'title3' => 'Третий титл',
            'title4' => 'Четвёртый титл',
            'title5' => 'Пятый титл',
        ];
      //  return view('default.template', $data);


      //  return view('default.template')->with('title','Шаблон темплейт');
        if(view()->exists('default.index')) {
            return view('default.index', $data);
        }
        abort(404);
    }
}
