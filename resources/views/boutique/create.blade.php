<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 22/12/2016
 * Time: 16:42
 */
?>
{!! Form::open(array('route' => 'boutique.store', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('nom') !!}
    </li>
    <li>
        {!! Form::label('adresse', 'adresse:') !!}
        {!! Form::text('adresse') !!}
    </li>
    <li>
        {!! Form::label('description', 'description:') !!}
        {!! Form::text('description') !!}
    </li>
    <li>
        {!! Form::label('mail', 'mail:') !!}
        {!! Form::text('mail') !!}
    </li>


    <li>
        {!! Form::label('webSite', 'Site web:') !!}
        {!! Form::text('webSite') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}