@section('css')
    <style>
        .container{
            padding: 0px;
            margin: 0px;
        }
    </style>


@endsection




@extends('master')

@section('content')

    <div class="home-img">
        <a href="{{route('produit.index')}}" class="waves-effect waves-light btn">Produits</a>
        <a href="{{ route('boutique.index') }}" class="waves-effect waves-light btn">Boutiques</a>

    </div>


@endsection
