@extends('layout.layout')
@section('title','order')
@section('content')

<form method="POST" action="{{ route('') }}">
	@csrf
	<div class="form-group">
		<label for="">เลือกpackage</label>
		<se>
	</div>
	<div class="form-group">
		<label for="">เบอร์โทร</label>
		<input type="text" name="phon" class="form-control">
	</div>
	<div class="form-group">
		<label for="">ที่อยู่</label>
		<input type="text" name="address" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Username</label>
		<input type="text" name="Username" id="Username" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="text" name="Password" class="form-control">
	</div>
	<a href="#">
		<input type="submit" value="บันทึก" class="btn btn-primary my-3">
	</a>

	<a href="" class="btn btn-success">
		กลับ
	</a>
</form>
@endsection