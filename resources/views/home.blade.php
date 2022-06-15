@extends('layouts.layout')

@section('pageTitle', 'Welcome!')

@section('mainContent')
<h1 class="text-center">Benvenuto nel nostro negozio di fumetti!<br />
<a href="{{route('products.index')}}" class="btn btn-success">Vai ai fumetti!</a></h1>


@endsection
