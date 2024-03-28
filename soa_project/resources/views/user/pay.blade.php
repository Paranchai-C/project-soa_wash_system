@extends('layout.layout')
@section('title','pay')
@section('content')
<form action="{{route('uploadpay')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">สลิป</label><br>
    <input type="file" name="image"><br><br>
    <button type="submit">Upload Image</button><br>
    <input type="hidden" name="id_order" value="<?php echo $id ?>">
</form>
@endsection