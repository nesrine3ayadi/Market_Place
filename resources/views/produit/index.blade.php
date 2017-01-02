<p>
Votre panier : {{ session('somme') }}
</p>
<!--  SEARCH -->
@foreach ($produit as $p)

{!! Form::open(array('route' => ['search',$p->nom], 'method' => 'POST')) !!}

    <input type="text" name="search" placeholder="search">

{!! Form::close() !!}



    {{ $p->nom }}
    @if(Auth::check())
    @if (Auth::user()->role==1)
        {!! Form::open(array('route' =>['produit.destroy',$p->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}

        <input id="submit" type="submit" class="form-control" name="submit" required value="Suppirmer produit">
        {!! Form::close() !!}
@endif
    @endif

    <a href="{{ route('produit.show',['id'=>$p->id]) }}"> Afficher</a>
    {!! Form::open(array('route' => ['ajouter',$p->id], 'method' => 'POST')) !!}
        {!! Form::submit("ajouter panier") !!}
        {{ Form::token() }}
    {!! Form::close() !!}


@endforeach

<a href="{{ route('commande.index') }}"> Afficher Panier</a>

