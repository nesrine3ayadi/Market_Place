<p>
    Votre panier : {{ session('somme') }}
</p>
<?php

?>
{!! Form::open(array('route' =>['boutique.update',$boutique->id ] , 'method' => 'PATCH','autocomplete'=>'off')) !!}

<label>Nom Boutique:</label>
<input id="nom" type="text" class="form-control" name="nom" required placeholder="{{ $boutique->nom }}" value="{{ $boutique->nom }}">

<label>adresse boutique:</label>
<input id="nom" type="text" class="form-control" name="adresse" required placeholder="{{ $boutique->adresse }}" value="{{ $boutique->adresse }}">

<label>description boutique:</label>
<textarea id="nom" type="text" class="form-control" name="description" required placeholder="{{ $boutique->description }}" value="{{ $boutique->description }}">{{ $boutique->description }}</textarea>

<label>mail boutique:</label>
<input id="nom" type="email" class="form-control" name="mail" required placeholder="{{ $boutique->mail }}" value="{{ $boutique->mail }}">

<label>site boutique:</label>
<input id="nom" type="text" class="form-control" name="webSite" required placeholder="{{ $boutique->webSite }}" value="{{ $boutique->webSite }}">

<input id="submit" type="submit" class="form-control" name="submit" required>

{!! Form::close() !!}
