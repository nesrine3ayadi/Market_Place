
@extends('master')
@section('content')

@foreach ($search as $s)


    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="../{{ $s->image }}" class="circle responsive-img"><br>

                </div>
                <div class="col s10">
              <span class="black-text">
                             <a href="{{ url('/produit/'.$s->id)  }}" >{{ $s->nom }} </a><br>
                            <span class="pull-right"> {{ $s->prix  }} dt</span>
              </span>
                </div>
            </div>
        </div>
    </div>

@endforeach

@endsection
