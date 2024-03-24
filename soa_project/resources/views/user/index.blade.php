@extends('layout.layout')
@section('title','index')
@section('content')
<h1>user interface</h1>
<a href="/register">หน้า register</a>
<a href="{{route('login')}}">login</a>
@endsection