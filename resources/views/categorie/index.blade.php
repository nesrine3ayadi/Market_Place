@extends('master')
@section('content')
@foreach ($categorie as $v)

    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s2">

                </div>
                <div class="col s10">
              <span class="black-text">
                                <a href="{{ url('/categorie/produits/'.$v->id) }}"> {{ $v->nom }}</a>

              </span>
                </div>
            </div>
        </div>
    </div>

@endforeach
    @endsection
