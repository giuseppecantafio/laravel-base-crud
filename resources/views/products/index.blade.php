@extends('layouts.layout')

@section('pageTitle', 'Elenco prodotti in vendita')

@section('mainContent')
<h1 class="text-center my-4">Ecco l'elenco dei nostri prodotti:</h1>

<div class="container">
    <div class="row">
        @foreach($products as $elm)
        <div class="col-2 py-2">
            <div class="card">
              <img class="card-img-top" src="{{$elm->thumb}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$elm->title}}</h5>
                <p class="card-text">
                  Prezzo: {{$elm->price}}<br />
                  Serie: {{$elm->series}}<br />
                  Data di uscita: {{$elm->sale_date}}<br />
                  Tipologia: {{$elm->type}}
                </p>
                <a href="{{route('products.show', $elm->id)}}" class="btn btn-success">Maggiori informazioni</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
