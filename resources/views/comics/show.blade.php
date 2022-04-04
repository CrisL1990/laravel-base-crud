@extends('layouts/base')

@section('pageTitle')
    {{$test->name}}
@endsection

@section('content')
    <div class="container">
        <h1>{{$test->title}}</h1>
        <div><img src="{{$test->thumb}}" alt=""></div>
        <div><strong>Prezzo: </strong>{{$test->price}}</div>
        <div><strong>Serie: </strong>{{$test->series}}</div>
        <div><strong>Data di uscita: </strong>{{$test->sale_date}}</div>
        <div><strong>Tipo: </strong>{{$test->type}}</div>
        <div><strong>Descrizione: </strong>{{$test->description}}</div>


        <a class="btn btn-primary mt-5" href="{{route('test.index')}}" role="button">Torna alla lista</a>


    </div>
    

@endsection