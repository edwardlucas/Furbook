{{-- 完成，现在访问不存在的猫时不会出错了 --}}
@extends('layouts.master')
@if(isset($cat))
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>
        {{ $cat->name }}
    </h2>
    <a href="{{ url('cats/'.$cat->id.'/edit') }}">
        <span class="glyphicon glyphicon-edit"></span>
        Edit
    </a>
    {!! Form::open(['url' => '/cats/'.$cat->id, 'method' => 'delete']) !!}
    {!! Form::submit('删除'.$cat->name.' Delete Cat', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    <p class="blockquote">Last edited: {{ $cat->updated_at->diffForHumans() }}</p>
@stop
@section('content')
    <p>Date of Birth: {{ $cat->date_of_birth }}</p>
    <p>
        @if ($cat->breed)
            Breed:
            {{ link_to('cats/breeds/'.$cat->breed->name,
            $cat->breed->name) }}
        @endif
    </p>
@stop
@else
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>
        猫不见了！
    </h2>
@stop
@section('content')
    <p class="alert-danger">这只猫被外星人捉走了。</p>
@stop
@endif