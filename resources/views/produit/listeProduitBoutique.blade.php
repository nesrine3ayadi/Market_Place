<h1>{{\App\Boutique::findOrFail($id)->nom}} </h1>
@foreach ($produit as $p)

    {{ $p->nom }}<br>
    {{ $p->description }}<br>
    {{ $p->prix }}<br>
    {{ $p->quantite }}<br>
    {{ $p->categori }}<br>
    <img src="{{ config('app.url').'/'.$p->image }}">
    {{ $p->evaluation }}<br>



    ***************


@endforeach