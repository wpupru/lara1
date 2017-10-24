<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



class CoreController extends Controller{

    public function index() {


    }

    public function getArticles(){
        $data = [
            'title' => 'Статьи'
        ];

        if(view()->exists('default.articles')){
            return view('default.articles', $data);
        }

        abort(404);
    }

    public function getArticle($id){
        echo $id;
    }



}