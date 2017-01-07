@extends('master')

@section('content')
<h3>{{\App\Boutique::findOrFail($id)->nom}} </h3>
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
                  {!! Form::open(array('route' => ['boutiqueProduit',$p->id], 'method' => 'POST','id'=>'liste_par_boutique')) !!}

                  Boutique : <a href="{{ url('boutique/produits/'.\App\Boutique::findOrfail($p->boutique)->id)  }}"> {{ \App\Boutique::findOrFail($p->boutique)->nom }}<br> </a>
     <br>
                  {{ Form::token() }}
                  {!! Form::close() !!}
              </span>
                </div>
            </div>
        </div>
    </div>


@endforeach

    @endsection