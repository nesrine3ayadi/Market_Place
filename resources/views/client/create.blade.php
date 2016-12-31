<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 20/12/2016
 * Time: 11:03
 */

?>

{!! Form::open(array('route' => 'client.store', 'method' => 'POST')) !!}
<ul>
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>

        <li>
        {!! Form::label('Nom', 'Nom:') !!}
        {!! Form::text('Nom') !!}
    </li>
    </div>
    <li>
        {!! Form::label('Prenom', 'Prenom:') !!}
        {!! Form::text('Prenom') !!}
    </li>
    <li>
        {!! Form::label('adresse', 'Adresse:') !!}
        {!! Form::text('adresse') !!}
    </li>
    <li>
        {!! Form::label('code_postal', 'Code_postal:') !!}
        {!! Form::text('code_postal') !!}
    </li>
    <li>
        {!! Form::label('sexe', 'Sexe:') !!}
        {!! Form::text('sexe') !!}
    </li>
    <li>
        {!! Form::label('mail', 'Mail:') !!}
        {!! Form::text('mail') !!}
    </li>
    <li>
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
    </li>



    <li>
        {!! Form::label('ville', 'Ville:') !!}
        {!! Form::text('ville') !!}
    </li>

    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
