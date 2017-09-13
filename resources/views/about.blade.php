@extends('layouts.master')
@section('header')
    <h2>About this site - 关于本站</h2>
@endsection
@section('content')
    <p>There are over {{ $number_of_cats }} cats on this site!</p>
@endsection