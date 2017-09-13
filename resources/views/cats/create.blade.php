@extends('layouts.master')
@section('header')
    <h2>Add a new cat新增一只猫</h2>
@stop
@section('content')
    {!! Form::open(['url' => '/cats']) !!}
    @include('partials.forms.cat')
    {!! Form::close() !!}
@stop