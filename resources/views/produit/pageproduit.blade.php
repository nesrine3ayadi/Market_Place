@extends('master')
@section('content')

 <div class="col s12 m12">
  <div class="card horizontal">
   <div class="card-image col s6 m6">
    <img src="../{{ $produit->image }}"><br>
    <span class="card-title">Nom :{{ $produit->nom }}</span>
   </div>
   <div class="card-content col s6 m6 ">
    <p> Description{{ $produit->description }}<br>
     Prix :{{ $produit->prix }} dt <br>
     Quantite :{{ $produit->quantite }} <br>
     Categorie :{{ \App\Categorie::findOrFail($produit->categori)->nom }}<br>

     Evaluation :{{ $produit->evaluation }}<br>
     Boutique : {{ \App\Boutique::findOrFail($produit->boutique)->nom }}<br>
     <br>
     {!! Form::open(array('route' => ['ajouter',$produit->id], 'method' => 'POST','id'=>'ajout_panier')) !!}
     <button  class="btn-flat" role="submit" type="submit" name="submit">Ajouter Panier</button>

     {{ Form::token() }}
     {!! Form::close() !!}
     @if(Auth::check())
      @if (Auth::user()->role==1)
                <?php $vendeur = \App\Vendeur::where('mail','=',Auth::user()->email)->first(); ?>


       @if($vendeur->boutique==$produit->boutique)
        {!! Form::open(array('route' =>['produit.destroy',$produit->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}

        <button id="submit" type="submit" class="btn red" name="submit" required value="Suppirmer produit">Supprimer</button>
        {!! Form::close() !!}
       @endif

      @endif
     @endif
    </p>
   </div>
   <div class="card-action">

   </div>
  </div>
 </div>
 <br>


@endsection