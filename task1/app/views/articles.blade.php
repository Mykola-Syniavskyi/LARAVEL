@extends ('app')

@section('content')
<ul>
@foreach($list as $link => $l)
    <li> <a href="{{$l}}">{{$link}}</a></li>
@endforeach
</ul>
@stop