@extends('layout.layout')
@section('title', 'welcome')
@section('content')
    <h1>ยินดีต้อนรับ</h1>
    @foreach($user as $u)
        <p>ชื่อ: {{ $u->name }}</p>
    @endforeach
@endsection