<h1>Login</h1>
<form method="POST" action="{{route('login_post')}}">
	@csrf
	<div class="form-group">
		<label for="">Username</label>
		<input type="text" name="Username" id="Username" class="form-control">
	</div><br>
	<div class="form-group">
		<label for="">Password</label>
		<input type="text" name="Password" class="form-control">
	</div>
	<a href="">
		<input type="submit" value="login" class="btn btn-primary my-3">
	</a>
	<a href="" class="btn btn-success">
		กลับ
	</a>
</form>