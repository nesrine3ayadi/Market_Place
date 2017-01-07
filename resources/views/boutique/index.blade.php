@extends('master')

@section('content')




@foreach ($boutiques as $b)
    <div class="collection">

    <a href="{{url('/boutique/produits/'.$b->id)}}" class="collection-item"> {{ $b->nom }}</a><br>


    </div>

@endforeach

@endsection
