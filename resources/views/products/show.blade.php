@extends('layouts.layout')

@section('pageTitle', 'Specifica prodotto')

@section('mainContent')
<h1 class="text-center">Maggiori dettagli sul tuo prossimo fumetto!</h1>
<h3 class="text-center">{{$prodotto->title}}</h3>
<p class="text-center">{{$prodotto->description}}</p>
<h6 class="text-center"><a href="{{route('products.index')}}" class="btn btn-success">Torna a tutti i fumetti</a></h6>
@endsection
