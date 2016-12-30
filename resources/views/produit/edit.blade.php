{!! Form::open(array('route' =>['produit.update',$produit->id ] , 'method' => 'PATCH','autocomplete'=>'off','enctype'=>"multipart/form-data")) !!}
<label>Nom :</label>
<input id="nom" type="text" class="form-control" name="nom" required placeholder="{{ $produit->nom }}" value="{{ $produit->nom }}">

<label>description :</label>
<input id="nom" type="text" class="form-control" name="description" required placeholder="{{ $produit->description }}" value="{{ $produit->description }}">

<label>prix :</label>
<input id="nom" type="text" class="form-control" name="prix" required placeholder="{{ $produit->prix }}" value="{{ $produit->prix }}">

<label>quantite :</label>
<input id="nom" type="text" class="form-control" name="quantite" required placeholder="{{ $produit->quantite }}" value="{{ $produit->quantite }}">

<li>
    {!! Form::label('categori', 'Categori:') !!}
    <select name="categori" >
        @foreach(\App\Categorie::all() as $c)
            <option value="{{ $c->id }}">{{ $c->nom }} </option>
        @endforeach


    </select>
</li>
<li>
    <img src="/{{ $produit->image }}"><br>

    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</li>

<input id="submit" type="submit" class="form-control" name="submit" required>



{!! Form::close() !!}
