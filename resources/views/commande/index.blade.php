
<h1>Votre panier : </h1>
<table border="1px black">
    <tr>
        <th><h2> nom produit:</h2> </th>
        <th><h2>total:</h2></th>
        <th><h2>Effacer Commande:</h2></th>

    </tr>
@if (!empty($commande))
    @foreach($commande as $c)



        <tr>
            <td>{{\App\Produit::findOrFail($c->Produit)->nom}}</td>
            <td>{{ $c->total}}</td>
            {!! Form::open(array('route' =>['commande.destroy',$c->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}
            <td> <input type="submit" value="Effacer Commande"> </td>
            {!! Form::close() !!}

        </tr>
    @endforeach
    @else
        Votre panier est vide
    @endif

</table>
la somme : {{ session()->pull('somme') }}
