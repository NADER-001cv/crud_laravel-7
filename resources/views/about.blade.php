@extends('welcome')
@section('content')
    <h1>
        welcome about {{$name}}
    </h1>
<ul>
    @foreach ($arr as $item)
        <li style="text-align: center" >
            {{$item}}
        </li>
    @endforeach
</ul>
@endsection