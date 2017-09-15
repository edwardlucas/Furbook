@extends('layouts.master')
@section('header')
    @if (isset($breed))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    <h2>
        All @if (isset($breed)){{ $breed->name }}@endif Cats
        <a href="{{ url('cats/create') }}" class="btn btn-primary pull-right">
            Add a new cat
        </a>
    </h2>
@stop {{--you end it with @endsection (or its alias @stop )--}}

@section('content')
    {{--
@forelse is a @foreach that also allows you to program in a fallback if the object
you’re iterating over is empty. We saw it in action at the start of this chapter

@forelse ($talks as $talk)
• {{ $talk->title }} ({{ $talk->length }} minutes)<br>
@empty
No talks this day.
@endforelse
    --}}

    {{--下面用@forelse来替代书中代码，测试没有猫时是否能够出现“还没有任何一只猫”这样的提示
    @foreach ($cats as $cat)
        <div class="cat">
            <a href="{{ url('cats/'.$cat->id) }}">
                <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
            </a>
        </div>
    @endforeach
    --}}
    @forelse ($cats as $cat)
        <div class="cat">
            <a href="{{ url('cats/'.$cat->id) }}" class="glyphicon-link">
                <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
            </a>
            <div class="well-sm"><p>品种产地： {{ $cat->breed->breedProfile->Country }}</p> <p>品种简介：{{ $cat->breed->breedProfile->brief }}</p>
            </div>
        </div>
    @empty
        <div class="alert">
            还没有任何一只猫。
        </div>
    @endforelse
@stop
