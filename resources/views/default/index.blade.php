@extends('default.layouts.mylayout')

@section('header')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $title2 }}</h1>
            <h3>{{date('Y.M.d', time())}}</h3>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

@endsection


@section('navbar')
    @parent {{--Можно опционально указать как-бы для переписи, но оставить как в макете:--}}
    @endsection

@section('sidebar')
    <div class="sidebar-module">
        <h3>Боковое меню</h3>
        <ol class="list-unstyled">
            <li><a href="#">Статьи</a></li>
            <li><a href="#">События</a></li>
            <li><a href="#">Разделы</a></li>
            <li><a href="#">Форум</a></li>
            <li><a href="<?php echo route('contact'); ?>">Контакты</a></li>
        </ol>
    </div>
    @endsection


@section('content')
    <div class="col-md-9">
    @include('content.home')
    </div>
    @endsection


@section('footer')
   @parent
    @endsection