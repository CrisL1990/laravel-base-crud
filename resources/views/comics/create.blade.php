@extends('layouts/base')

@section('pageTitle', 'Crea fumetto')


@section('content')

    
    
    
    <div class="container">
        <h1 class="mb-4">Crea Nuovo Fumetto</h1>
  
        <form method="POST" action="{{ route('test.store') }}">

            @csrf

            <div class="mb-3">
                <label for="src" class="form-label" >Indirizzo immagine</label>
                <input type="text" class="form-control" id="src" name="src" value="" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie</label>
                <input type="text" class="form-control" id="type" name="series" value="" required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label" >Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="" required>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="weight" name="price" value="" required>
            </div>


            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" required>
                   
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Invia</button>

        </form>
    </div>
    
    

@endsection