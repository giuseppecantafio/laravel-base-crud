@extends('layouts.layout')

@section('pageTitle', 'Welcome!')

@section('mainContent')
<h1 class="text-center">Benvenuto nella tua libreria DC Comics<br />
<a href="{{route('products.index')}}" class="btn btn-success">Vai ai tuoi fumetti!</a></h1>


@endsection
