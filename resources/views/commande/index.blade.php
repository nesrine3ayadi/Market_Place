
<h1>Votre panier : </h1>
<table border="1px black">
    <tr>
        <th><h2> nom produit:</h2> </th>
        <th><h2>total:</h2></th>
        <th><h2>Effacer Commande:</h2></th>

    </tr>

@foreach($commande as $c)



        <tr>
            <td>{{\App\Produit::findOrFail($c->Produit)->nom}}</td>
            <td>{{ $c->total}}</td>
            {!! Form::open(array('route' =>['commande.destroy',$c->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}
                <td> <input type="submit" value="Effacer Commande"> </td>
            {!! Form::close() !!}

        </tr>
@endforeach

</table>
la somme : {{ session()->pull('somme') }}
