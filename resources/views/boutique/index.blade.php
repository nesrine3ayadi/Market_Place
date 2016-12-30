<p>
    Votre panier : {{ session('somme') }}
</p>



@foreach ($boutiques as $b)

    {{ $b->id }}

@endforeach

