<p>
    Votre panier : {{ session('somme') }}
</p>

@foreach ($vendeur as $v)

    {{ $v->id }}

@endforeach
