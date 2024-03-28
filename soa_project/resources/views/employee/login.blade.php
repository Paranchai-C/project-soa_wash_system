<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd; 
            color: #333; 
            padding: 20px;
            text-align: center; 
        }
        h1 {
            margin-bottom: 20px;
            color: #000; 
        }
        form {
            display: flex;
            flex-direction: column; 
            align-items: center;
            max-width: 400px; 
            background-color: #fff;
            padding: 20px;
            border-radius: 5px; 
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); 
            margin: 0 auto; 
        }
        .form-group {
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box; 
        }
        label {
            display: block; 
            margin-bottom: 5px; 
            text-align: left; 
        }
        input[type="text"],
        input[type="password"] {
            width: 100%; 
            padding: 10px; 
            border-radius: 3px; 
            border: 1px solid #ccc;
        }
        .btn-container {
            display: flex; 
            justify-content: space-between; 
            width: 100%; 
        }
        .btn {
            padding: 10px 20px; 
            border-radius: 5px; 
            transition: all 0.3s ease; 
            text-decoration: none; 
            color: #fff; 
            width: 48%; 
        }
        .btn-primary {
            background-color: #1565c0; 
            border: 2px solid #1565c0; 
        }
        .btn-primary:hover {
            background-color: #0d47a1; 
            border: 2px solid #0d47a1;
        }
        .btn-success {
            background-color: #43a047; 
            border: 2px solid #43a047; 
        }
        .btn-success:hover {
            background-color: #2e7d32; 
            border: 2px solid #2e7d32; 
        }
    </style>
</head>
<body>
    <h1>เข้าสู่ระบบพนักงาน</h1>
    <form method="POST" action="{{ route('elogin_post') }}">
        @csrf
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name="Username" id="Username" class="form-control">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" class="form-control">
        </div>
        <div class="btn-container">
            <a href="{{ route('eindex') }}" class="btn btn-success">Back</a>
            <input type="submit" value="Login" class="btn btn-primary">
        </div>
    </form>
</body>
</html>