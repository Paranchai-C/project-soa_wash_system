@extends('layout.layout')
@section('title', 'Welcome')
@section('content')
    <h1>ยินดีต้อนรับ</h1>
    <p>Username: {{ $user['username'] }}</p>
    <p>Name: {{ $user['name'] }}</p>
    <input type="hidden" value="{{ $user['id'] }}" name="id_user" id="id_user">
    <!-- และอื่นๆ ตามความต้องการ -->   
@endsection