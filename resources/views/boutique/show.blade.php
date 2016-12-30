<p>
    Votre panier : {{ session('somme') }}
</p>

<a href="{{ url('boutique/produits/'.$boutique->id) }}">afficher les produits</a>