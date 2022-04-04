@extends('layouts/base')

@section('pageTitle', 'Lista Fumetti')

@section('content')

<h1>LISTA DEI FUMETTI</h1>
<table class="table">

    <div class="container">
        
        <a class="btn btn-primary" href="{{route('test.create')}}" role="button">Crea Nuovo</a>
        
        <thead>
            <tr>
                <th scope="col">Id</th> 
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data uscita</th>
                <th scope="col">Genere</th>
                <th scope="col">Azioni</th>
                
                

            </tr>
          </thead>
          <tbody>
            
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <th scope="row">{{$comic->title}}</th>
                        <td>{{$comic->description}}</td>
                        <td><img src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('test.show', $comic->id)}}" role="button">Vedi</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('test.edit', $comic->id)}}" role="button">Modifica</a>
                        </td>

                        <td>
                            <form action="{{route('test.destroy', ['test' => $comic->id])}}"
                            method="post">
                                @csrf
                                @method('DELETE')

                                <button onclick="javascript:return confirm('Sei sicuro di voler eliminare questo elemento?')" class="btn btn-danger" type="submit" name="delete">Elimina</button>
                            </form>
                        </td>
                    </tr>

                   
                @endforeach
                

          </tbody>
        </table>
    </div>
    

@endsection
    
