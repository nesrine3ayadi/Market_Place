<?php

?>

{!! Form::open(array('route' =>['client.update',$u->id ] , 'method' => 'PATCH','autocomplete'=>'off')) !!}

    <label>Nom :</label>
<input id="nom" type="text" class="form-control" name="nom" required placeholder="{{ $clients->Nom }}" value="{{ $clients->Nom }}">
    <label>PreNom :</label>

    <input id="prenom" type="text" class="form-control" name="prenom" required placeholder="{{ $clients->Prenom }}" value="{{ $clients->Prenom }}">
    <label>Adresse :</label>

    <input id="adresse" type="text" class="form-control" name="adresse" required placeholder="{{ $clients->adresse }}" value="{{ $clients->adresse }}">

    <label>code_postale :</label>
    <input id="code_postal" type="text" class="form-control" name="code_postal" required placeholder="{{ $clients->code_postal }}" value="{{ $clients->code_postal }}">

    <label>Ville :</label>
    <input id="ville" type="text" class="form-control" name="ville" required placeholder="{{ $clients->ville }}" value="{{ $clients->ville }}">

    <label>Sexe :</label>
<label>Homme :</label>
<input id="sexe" type="radio" class="form-control" name="sexe" required  @if($clients->sexe=='Homme') {{ "checked" }}@endif value="Homme">
<label>Femme :</label>

<input id="sexe" type="radio" class="form-control" name="sexe" required @if($clients->sexe=='Femme') {{ "checked" }}@endif value="Femme">


    <label>Mail :</label>
    <input id="mail" type="text" class="form-control" name="mail"  required placeholder="{{ $u->email }}" value="{{ $u->email }}" autocomplete="off" autofill="off" >

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
{!! Form::open(array('route' =>['client.destroy',$clients->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}
<input id="submit" type="submit" class="form-control" name="submit" required value="Suppirmer Compte">

{!! Form::close() !!}


