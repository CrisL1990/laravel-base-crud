@extends('layouts/base')

@section('pageTitle', 'Modifica fumetto')


@section('content')

    
    
    
    <div class="container">
        <h1 class="mb-4">Modifica Fumetto</h1>
  
        <form method="POST" action="{{ route('test.update', ['test'=>$test->id]) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="src" class="form-label" >Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$test->thumb}}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$test->title}}" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$test->type}}" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$test->series}}" required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label" >Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$test->sale_date}}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$test->price}}" required>
            </div>


            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" required>
                    {{$test->description}}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Modifica</button>

        </form>
    </div>
    
    

@endsection