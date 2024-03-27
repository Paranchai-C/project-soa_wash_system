<h1>register interface</h1>

<form method="post" action="/login_post">
	@csrf
	<div class="form-group">
		<label for="">ชื่อ</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="">เบอร์โทร</label>
		<input type="text" name="phon" class="form-control">
	</div>
	<div class="form-group">
		<label for="">ที่อยู่</label>
		<input type="text" name="้home" class="form-control">
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