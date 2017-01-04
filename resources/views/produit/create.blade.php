@extends('master')
@section('content')
{!! Form::open(array('route' => 'produit.store', 'method' => 'POST','enctype'=>"multipart/form-data")) !!}
<ul>
    <li>
        {!! Form::label('nom', 'Nom Produit') !!}
        {!! Form::text('nom','' ,['required'=>'required'] )!!}
    </li>
    <li>
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description','',['required'=>'required']) !!}
    </li>
    <li>
        {!! Form::label('prix', 'Prix:') !!}
        {!! Form::text('prix','',['required'=>'required']) !!}
    </li>
    <li>
        {!! Form::label('quantite', 'Quantite:') !!}
        {!! Form::text('quantite','',['required'=>'required']) !!}
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
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files" required>
            </div>
        </div>
    </li>
    <li>
        {!! Form::label('evaluation', 'Evaluation:') !!}
        {!! Form::text('evaluation','',['required'=>'required']) !!}
    </li>

    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}

@if(Session::has('error'))) // Laravel 5 (Session('error')
<div class="alert alert-danger">
    {{ Session::get('error')}} // Laravel 5 {{Session('error')}}
</div>
@endif
@endsection