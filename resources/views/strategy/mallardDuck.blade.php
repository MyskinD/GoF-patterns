@extends('layouts.master')

@section('title', 'Mallard Duck')

@section('content')
    <p>{{ $display }}</p>
    <p>{{ $quack }}</p>
    <p>{{ $fly }}</p>
@endsection
