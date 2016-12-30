<?php


 use App\Vendeur;

//dd();

?>

{!! Form::open(array('route' => 'vendeur.store', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('nom') !!}
    </li>
    <li>
        {!! Form::label('prenom', 'prenom:') !!}
        {!! Form::text('prenom') !!}
    </li>
    <li>
        {!! Form::label('sexe', 'Sexe:') !!}
        {!! Form::text('sexe') !!}
    </li>
    <li>
        {!! Form::label('adresse', 'Adresse:') !!}
        {!! Form::text('adresse') !!}
    </li>
    <li>
        {!! Form::label('code_postale', 'Code_postal:') !!}
        {!! Form::text('code_postale') !!}
    </li>
    <li>
        {!! Form::label('ville', 'Ville:') !!}
        {!! Form::text('ville') !!}
    </li>
    <li>
        {!! Form::label('pays', 'pays:') !!}
        {!! Form::select('pays',Vendeur::getEnumValues('vendeur','pays')) !!}
    </li>
    <li>
        {!! Form::label('tel', 'tel:') !!}
        {!! Form::text('tel') !!}
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
        {!! Form::label('num_CIN_vendeur', 'num_CIN_vendeur:') !!}
        {!! Form::text('num_CIN_vendeur') !!}
    </li>





    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
