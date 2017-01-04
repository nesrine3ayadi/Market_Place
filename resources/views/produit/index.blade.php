@extends('master')
@section('content')

<div class="row">
@foreach ($produit as $p)
<div class="col s4 m3 ">
    <div class="card sticky-action medium ">
        <div class="card-image" id="img-produit">
            <img src="{{ $p->image }}">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"> {{ $p->nom }}<i class="material-icons right">more_vert</i></span>
            <p>
                {{ $p->description }}<br>



            </p>
        </div>
        <div class="card-action">
            {!! Form::open(array('route' => ['ajouter',$p->id], 'method' => 'POST','id'=>'ajout_panier')) !!}
            <button  class="btn-flat" role="submit" type="submit" name="submit"><i class="material-icons">add</i></button>
            {{ Form::token() }}
            {!! Form::close() !!}
            <a href="{{ route('produit.show',['id'=>$p->id]) }}"> Afficher</a>
            @if(Auth::check())
                @if (Auth::user()->role==1)
                    <?php $vendeur = \App\Vendeur::where('mail','=',Auth::user()->email)->first(); ?>


                    @if($vendeur->boutique==$p->boutique)
                        {!! Form::open(array('route' =>['produit.destroy',$p->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}

                            <button id="submit" type="submit" class="btn red" name="submit" required value="Suppirmer produit">Supprimer</button>
                        {!! Form::close() !!}
                    @endif

                @endif
            @endif

        </div>
        <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">{{ $p->nom }}<i class="material-icons right">close</i></span>
            Prix : {{ $p->prix }}<br>
            Quantité :{{ $p->quantite }}<br>
            Categorie :{{ \App\Categorie::findOrFail($p->categori)->nom }}<br>
            Evaluation : {{ $p->evaluation }}<br>
            Boutique : {{ \App\Boutique::findOrFail($p->boutique)->nom }}<br>

        </div>

    </div>
</div>




@endforeach

@endsection
</div>