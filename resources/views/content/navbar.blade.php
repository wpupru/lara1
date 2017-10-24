<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Project:</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home')}}">Главная</a></li>
                <li><a href="{{route('about')}}">О нас</a></li>
                <li><a href="{{route('articles')}}">Статьи</a></li>
                <li><a href="{{route('article',array('id'=>'assa'))}}">Статья</a></li>
                <li><a href="{{route('contact')}}">Контакты</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>