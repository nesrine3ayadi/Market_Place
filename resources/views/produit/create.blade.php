@extends('master')
@section('content')
{!! Form::open(array('route' => 'produit.store', 'method' => 'POST','enctype'=>"multipart/form-data")) !!}
<ul>
    <li>
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('nom') !!}
    </li>
    <li>
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description') !!}
    </li>
    <li>
        {!! Form::label('prix', 'Prix:') !!}
        {!! Form::text('prix') !!}
    </li>
    <li>
        {!! Form::label('quantite', 'Quantite:') !!}
        {!! Form::text('quantite') !!}
    </li>
    <li>
        {!! Form::label('categori', 'Categori:') !!}
        <select name="categori" >
            @foreach(\App\Categorie::all() as $c)
                <option value="{{ $c->id }}">{{ $c->nom }} </option>
            @endforeach


        </select>
    </li>
    <li>
        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image') !!}
    </li>
    <li>
        {!! Form::label('evaluation', 'Evaluation:') !!}
        {!! Form::text('evaluation') !!}
    </li>

    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
@endsection