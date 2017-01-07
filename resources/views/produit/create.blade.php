@extends('master')
@section('content')
{!! Form::open(array('route' => 'produit.store', 'method' => 'POST','enctype'=>"multipart/form-data")) !!}

    <div class="input-field">
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('nom') !!}
    </div>
    <div class="input-field">

        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description') !!}

    </div>

    <div class="input-field">
        {!! Form::label('prix', 'Prix:') !!}
        {!! Form::text('prix') !!}
    </div>


    <div class="input-field">
        {!! Form::label('quantite', 'Quantite:') !!}
        {!! Form::text('quantite') !!}
    </div>

        <div class="input-field ">

            <select name="categori" >
                <option value="" disabled selected>Choisir une categorie</option>
                @foreach(\App\Categorie::all() as $c)


                    <option value="{{ $c->id }}">{{ $c->nom }} </option>
                @endforeach


            </select>

        </div>
<a class="waves-effect waves-light btn" href="#modal1">Ajouter une categorie</a>
@if ($errors->has('nom'))
    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
@endif


    <div class="input-field">

        {!! Form::file('image') !!}
    </div>

    <div class="input-field">
        {!! Form::label('evaluation', 'Evaluation:') !!}
        {!! Form::text('evaluation') !!}

    </div>
    <div class="input-field">
        {!! Form::submit() !!}
    </div>

{!! Form::close() !!}
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        {!! Form::open(array('route' => 'categorie.store', 'method' => 'POST')) !!}

        <div class="input-field">

            {!! Form::label('nom', 'Nom:') !!}
            {!! Form::text('nom') !!}
        </div>
        <div class="input-field">
            {!! Form::submit() !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>
@endsection