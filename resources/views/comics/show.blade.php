@extends('layouts/base')

@section('pageTitle')
    {{$test->name}}
@endsection

@section('content')
    <div class="container">
        <h1>{{$test->name}}</h1>
        <div><img src="{{$test->thumb}}" alt=""></div>
        <div><strong>Prezzo</strong>{{$test->price}}</div>

        <a class="btn btn-primary" href="{{route('test.index')}}" role="button">Torna alla lista</a>


    </div>
    

@endsection