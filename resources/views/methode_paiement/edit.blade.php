{!! Form::open(array('route' =>['methode_paiment.update',$paiement->id ] , 'method' => 'PATCH','autocomplete'=>'off','enctype'=>"multipart/form-data")) !!}
<label>Nom paiement :</label>
<input id="nom" type="text" class="form-control" name="nom" required placeholder="{{ $paiement->nom }}" value="{{ $paiement->nom }}">

<label>Taxe :</label>
<input id="nom" type="text" class="form-control" name="taxe" required placeholder="{{ $paiement->taxe }}" value="{{ $paiement->taxe }}">

<input id="submit" type="submit" class="form-control" name="submit" required>


{!! Form::close() !!}