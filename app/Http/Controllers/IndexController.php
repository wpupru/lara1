<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller {

    public function show(){
     //   view('template');

     $array = array(
        'title' => 'Главная страница',
        'title2' => 'Новая главная страница',

        'data' => [
            'one' => 'List 1',
            'two' => 'List 2',
            'three' => 'List 3',
            'four' => 'List 4',
            'five' => 'List 5',
        ],
         'dataI' => ['List 1','List 2', 'List 3', 'List 4', 'List 5'],
         'bvar' => true,
         'script' => "<script>document.write('<h1>hello</h1>')</script>"
    );
      //  return view('default.template', $data);


      //  return view('default.template')->with('title','Шаблон темплейт');
        if(view()->exists('default.index')) {
            return view('default.index', $array);
        }
        abort(404);
    }
}
