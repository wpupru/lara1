<div class="col-md-6">
    {{--{{$script}} не будет работать без !! с двух сторон и только одной парой фигурных кавычек--}}
   {{-- {!! $script !!}--}}
    {{--отображение кода--}}
  {{--  @{{ name }}--}}

    {{--функции и операторы--}}

    {{--@if(route('home'))

        <br>This is home page

    @elseif(route('articles'))

        <br> Это страница статей

    @else
        <br>Это другая страница
    @endif--}}

    {{--использование циклов--}}

    {{--<ul><br>
        @for($i = 0;$i < count($dataI); $i++)
            <li>
                {{ $dataI[$i] }}
            </li>
        @endfor
    </ul>--}}

{{--    @foreach($data as $item=>$value)
        <ul><br>
            <li>
                {{ $item . ' => ' . $value }}
            </li>
        </ul><br>

   @endforeach

    @forelse($data as $item=>$value)
        <ul>
            <li>
                {{ $item . ' => ' . $value }}
            </li>
            @empty
                <p>No items</p>
        </ul><br>

    @endforelse

    --}}{{--для передачи данных в вид--}}{{--
    @each('default.list', $dataI, 'value')

    @myDir('Hellouin')--}}

    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
</div>
<div class="col-md-6">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
</div>
<div class="col-md-12">
    <h2>Sample block post</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
</div>