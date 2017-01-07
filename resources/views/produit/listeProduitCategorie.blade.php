@extends('master')

@section('content')

 <h4>Categorie : {{\App\Categorie::findOrFail($id)->nom}} </h4>
@foreach ($produit as $p)



<div class="col s12 m8 offset-m2 l6 offset-l3">
    <div class="card-panel grey lighten-5 z-depth-1">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img src="{{ config('app.url').'/'.$p->image }}" class="circle responsive-img">

            </div>
            <div class="col s10">
              <span class="black-text">
                             <a href="{{ url('/produit/'.$p->id)  }}" >{{ $p->nom }} </a><br>
                            <span class="pull-right"> {{ $p->prix  }} dt</span><br>

              </span>
            </div>
        </div>
    </div>
</div>




@endforeach

    @endsection