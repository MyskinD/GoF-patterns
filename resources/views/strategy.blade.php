@extends('layouts.master')

@section('title', 'Pattern Strategy')

@section('content')
    <div class="links">
        <a href="{{ route('miniDuck') }}">Mini Duck</a>
        <a href="{{ route('modelDuck') }}">Model Duck</a>
    </div>
@endsection
