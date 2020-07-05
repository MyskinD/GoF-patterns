@extends('layouts.master')

@section('title', 'Model Duck')

@section('content')
    <p>{{ $display }}</p>
    <p>{{ $quack }}</p>
    <p>{{ $flyBefore }}</p>
    <p>{{ $flyAfter }}</p>
@endsection
