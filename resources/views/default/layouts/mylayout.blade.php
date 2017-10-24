<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ $title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
@section('navbar')
    @include('content.navbar')
    {{--@endsection
    @yield('navbar')--}}
@show

@section('header')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $title }}</h1>
            <h3>{{date('Y.M.d', time())}}</h3>

            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
@show

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3">
            @section('sidebar')
                <div class="sidebar-module">
                    <h2>Archives</h2>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
            @show
        </div>

        @yield('content')

        @if(route('home'))

            <br>This is home page

        @elseif(route('articles'))

            <br> Это страница статей

        @else
            <br>Это другая страница
        @endif

        {{--использование циклов--}}

       {{-- <ul>
            @for($i = 0;$i < count($dataI); $i++)
                <li>
                    {{ $dataI[$i] }}
                </li>
            @endfor
        </ul>--}}

    </div>

    <hr>

    <footer>
        @section('footer')
            @include('content.copyright')
        @show
    </footer>
</div>
</body>
</html>