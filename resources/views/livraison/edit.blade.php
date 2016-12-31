{!! Form::open(array('route' =>['livraison.update',$livraison->id ] , 'method' => 'PATCH','autocomplete'=>'off','enctype'=>"multipart/form-data")) !!}
<label>Nom Livraison :</label>
<input id="nom" type="text" class="form-control" name="nom" required placeholder="{{ $livraison->nom }}" value="{{ $livraison->nom }}">

<label>Tarif :</label>
<input id="nom" type="text" class="form-control" name="description" required placeholder="{{ $livraison->tarif }}" value="{{ $livraison->tarif }}">

<input id="submit" type="submit" class="form-control" name="submit" required>


{!! Form::close() !!}