@extends('layouts.master')

@section('title', 'GoF Patterns')

@section('content')
    <div class="links">
        <a href="{{ url('generating') }}">Generating</a>
        <a href="{{ url('structural') }}">Structural</a>
        <a href="{{ url('behavioral') }}">Behavioral</a>
    </div>
@endsection
