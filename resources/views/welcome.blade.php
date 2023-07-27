@extends('layout')
@section('title',"Home Page")
@section('content')
            @auth
            {{-- auth()->user() --}}
            {{auth()->user()->name}}
            @endauth
@endsection