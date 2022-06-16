@extends('layouts.layout')

@section('pageTitle', 'Libreria')

@section('mainContent')
<h1 class="text-center my-4">Ecco la tua libreria</h1>

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
                <div class="user-options d-flex align-items-center justify-content-center gap-2">
                  <a href="{{route('products.show', $elm->id)}}" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                  <a href="{{route('products.edit', $elm->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                 <form action="{{route('products.destroy', $elm->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Sei sicuro di voler cancellare?')" class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                </div>
               </form>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
