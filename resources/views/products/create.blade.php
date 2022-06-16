@extends('layouts.layout')

@section('pageTitle', 'Contattaci')

@section('mainContent')
<h1 class="text-center">Inserisci i dati del tuo fumetto DC Comics</h1>

<div class="main-container">

    <form action="{{route('products.store')}}" method="post">
      @csrf
      @method('POST')

      <div class="form-group mb-3">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Inserire titolo" name="title">     
      </div>

      <div class="form-group mb-3">
        <label for="description">Sintetica descrizione del prodotto</label>
        <textarea type="text" class="form-control" id="description" aria-describedby="description" placeholder="Inserire descrizione" name="description" cols="30" rows="10"></textarea>     
      </div>

      <div class="form-group mb-3">
        <label for="thumb">Immagine</label>
        <input type="url" class="form-control" id="thumb" aria-describedby="thumb" placeholder="Inserire URL immagine" name="thumb">     
      </div>

      <div class="form-group mb-3">
        <label for="title">Prezzo</label>
        <input type="text" class="form-control" id="price" aria-describedby="price" placeholder="Inserire prezzo, massimo 4 cifre" name="price">     
      </div>

      <div class="form-group mb-3">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" aria-describedby="series" placeholder="Inserire serie" name="series">     
      </div>

      <div class="form-group mb-3">
        <label for="sale_date">Data di uscita</label>
        <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date" placeholder="Inserire data" name="sale_date">     
      </div>

      <div class="form-group mb-3">
        <label for="type">Seleziona tipo</label>
        <select class="form-control" id="type" aria-describedby="type"  name="type">
          <option selected>comic book</option>
      </div>
      
      <button type="submit" class="btn btn-success">Aggiungi prodotto</button>

    </form>
</div>
@endsection
