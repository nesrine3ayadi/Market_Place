@extends('master')

@section('content')
    <div class="row">
    <div class="col s6 m6 ">
        <h4>
            Devenir un client
        </h4>
{!! Form::open(array('route' => 'client.store', 'method' => 'POST')) !!}
<ul>

<div class="input-field">
        {!! Form::text('Nom') !!}
         {!! Form::label('Nom', 'Nom') !!}

</div>

    <div class="input-field">

    {!! Form::text('Prenom') !!}
    {!! Form::label('Prenom', 'Prenom') !!}

    </div>

    <div class="input-field">
        {!! Form::text('adresse') !!}
    {!! Form::label('adresse', 'Adresse') !!}
    </div>

    <div class="input-field">

        {!! Form::text('code_postal') !!}
        {!! Form::label('code_postal', 'Code postal') !!}
    </div>


    <div class="input-field">

        <p>
            <input name="sexe" type="radio" id="Homme" value="Homme" />
            <label for="Homme">Homme</label>

            <input name="sexe" type="radio" id="Femme" value="Femme" />
            <label for="Femme">Femme</label>


        </p>
    </div>
        <div class="input-field">

        {!! Form::label('mail', 'Mail:') !!}
        {!! Form::text('mail') !!}

        </div>

        <div class="input-field {{ $errors->has('password') ? ' has-error' : '' }}">

                <input id="password" type="password" class="form-control" name="password" required>
                <label for="password" class="col-md-4 control-label">Password</label>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
        </div>

        <div class="input-field">

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
        </div>



        <div class="input-field">


        {!! Form::text('ville') !!}
            {!! Form::label('ville', 'Ville') !!}


        </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>
</ul>
{!! Form::close() !!}
    </div>
<?php


use App\Vendeur;

//dd();

?>
    <div class="col s6 m6 ">
        <h4>
            Devenir un Vendeur
        </h4>
{!! Form::open(array('route' => 'vendeur.store', 'method' => 'POST')) !!}

    <div class="input-field">

    {!! Form::text('nom') !!}
    {!! Form::label('nom', 'Nom') !!}

    </div>

    <div class="input-field">

        {!! Form::text('prenom') !!}
        {!! Form::label('prenom', 'prenom') !!}


    </div>
        <div class="input-field">

            <select name="sexe">
                <option value="" disabled selected>Choose your sexe</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme </option>
            </select>
        </div>
    <div class="input-field">

        {!! Form::text('adresse') !!}
        {!! Form::label('adresse', 'Adresse') !!}
    </div>

    <div class="input-field">

    {!! Form::text('code_postale') !!}
    {!! Form::label('code_postale', 'Code postal') !!}
    </div>

    <div class="input-field">

        {!! Form::text('ville') !!}
        {!! Form::label('ville', 'Ville') !!}

    </div>

    <div class="input-field">

        {!! Form::select('pays',Vendeur::getEnumValues('vendeur','pays')) !!}
        {!! Form::label('pays', 'pays') !!}

    </div>

    <div class="input-field">

    {!! Form::text('tel') !!}
    {!! Form::label('tel', 'telephone') !!}

    </div>

    <div class="input-field">

    {!! Form::text('mail') !!}
    {!! Form::label('mail', 'Mail') !!}

    </div>

    <div class="input-field {{ $errors->has('password') ? ' has-error' : '' }}">

    <input id="password" type="password" class="form-control" name="password" required>
    <label for="password" class="col-md-4 control-label">Password</label>

    @if ($errors->has('password'))
        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="input-field">

        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
    </div>

    <div class="input-field">

        {!! Form::text('num_CIN_vendeur') !!}
    {!! Form::label('num_CIN_vendeur', 'num CIN') !!}
    </div>








    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>

{!! Form::close() !!}
    </div>
    </div>


@endsection

@section('script')
<script>
    $(document).ready(function() {
    $('select').material_select();
    });

</script>
@endsection