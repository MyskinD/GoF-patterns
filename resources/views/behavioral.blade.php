@extends('layouts.master')

@section('title', 'Behavioral Patterns')

@section('content')
    <div class="links">
        <a href="#" style="color: red; cursor: text;">Chain Of Responsibility</a>
        <a href="#" style="color: red; cursor: text;">Command</a>
        <a href="#" style="color: red; cursor: text;">Iterator</a>
        <a href="#" style="color: red; cursor: text;">Mediator</a>
        <a href="#" style="color: red; cursor: text;">Memento</a>
        <a href="#">Observer</a>
        <a href="#" style="color: red; cursor: text;">State</a>
        <a href="{{ route('strategy') }}">Strategy</a>
        <a href="#" style="color: red; cursor: text;">Template Method</a>
        <a href="#" style="color: red; cursor: text;">Visitor</a>
    </div>
@endsection
