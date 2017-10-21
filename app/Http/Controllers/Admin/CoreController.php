<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



class CoreController extends Controller{

    public function index() {

    }

    public function getArticles(){
        echo 'Статьи';
    }

    public function getArticle($id){
        echo $id;
    }



}