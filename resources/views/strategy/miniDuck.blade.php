@extends('layouts.master')

@section('title', 'Mini Duck')

@section('content')
    <p>{{ $display }}</p>
    <p>{{ $quack }}</p>
    <p>{{ $fly }}</p>
@endsection
