@extends('master')
@section('content')

{!! Form::open(array('route' =>['vendeur.update',$vendeurs->id ] , 'method' => 'PATCH','autocomplete'=>'off')) !!}

<label>Nom :</label>
<input id="nom" type="text" class="form-control" name="nom" required placeholder="{{ $vendeurs->nom }}" value="{{ $vendeurs->nom }}">
<label>PreNom :</label>

<input id="prenom" type="text" class="form-control" name="prenom" required placeholder="{{ $vendeurs->prenom }}" value="{{ $vendeurs->prenom }}">
<label>Sexe :</label>
<label>Homme :</label>
<input id="sexe" type="radio" class="form-control" name="sexe" required  @if($vendeurs->sexe=='Homme') {{ "checked" }}@endif value="Homme">
<label>Femme :</label>

<input id="sexe" type="radio" class="form-control" name="sexe" required @if($vendeurs->sexe=='Femme') {{ "checked" }}@endif value="Femme">


<label>Adresse :</label>

<input id="adresse" type="text" class="form-control" name="adresse" required placeholder="{{ $vendeurs->adresse }}" value="{{ $vendeurs->adresse }}">

<label>code_postale :</label>
<input id="code_postal" type="text" class="form-control" name="code_postale" required placeholder="{{ $vendeurs->code_postale }}" value="{{ $vendeurs->code_postale }}">

<label>Ville :</label>
<input id="ville" type="text" class="form-control" name="ville" required placeholder="{{ $vendeurs->ville }}" value="{{ $vendeurs->ville }}">
<label>Pays :</label>

<input id="adresse" type="text" class="form-control" name="pays" required placeholder="{{ $vendeurs->pays }}" value="{{ $vendeurs->pays }}">
<label>tel :</label>

<input id="adresse" type="text" class="form-control" name="tel" required placeholder="{{ $vendeurs->tel }}" value="{{ $vendeurs->tel }}">


<label>Mail :</label>
<input id="mail" type="text" class="form-control" name="mail"  required placeholder="{{ $vendeurs->mail }}" value="{{ $vendeurs->mail }}" autocomplete="off" autofill="off" >
<label>Num CIN :</label>

<input id="adresse" type="text" class="form-control" name="num_CIN_vendeur" required placeholder="{{ $vendeurs->num_CIN_vendeur }}" value="{{ $vendeurs->num_CIN_vendeur }}">


<label>Password :</label>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

<input id="submit" type="submit" class="form-control" name="submit" required>

{!! Form::close() !!}

{!! Form::open(array('route' =>['vendeur.destroy',$vendeurs->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}
<input id="submit" type="submit" class="form-control" name="submit" required value="Suppirmer Compte">

{!! Form::close() !!}
    @endsection
