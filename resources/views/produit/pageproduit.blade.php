Nom :{{ $produit->nom }} <br>
Description{{ $produit->description }}<br>
Prix :{{ $produit->prix }} dt<br>
Quantite :{{ $produit->quantite }}<br>
 Categorie :{{ \App\Categorie::findOrFail($produit->categori)->nom }}<br>
<img src="../{{ $produit->image }}"><br>
Evaluation :{{ $produit->evaluation }}<br>
Boutique : {{ \App\Boutique::findOrFail($produit->boutique)->nom }}<br>


