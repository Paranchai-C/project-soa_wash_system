<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd; /* Light blue background */
            color: #333; /* Dark text color */
            padding: 20px;
            text-align: center; /* Center align the content */
        }
        h1 {
            margin-bottom: 20px; /* Added margin for better spacing */
            color: #000; /* Black color for the heading */
        }
        form {
            display: flex; /* Use flexbox for layout */
            flex-direction: column; /* Arrange items vertically */
            align-items: center; /* Center items horizontally */
            max-width: 400px; /* Set maximum width for the form */
            background-color: #fff; /* White background for the form */
            padding: 20px; /* Padding for the form */
            border-radius: 5px; /* Rounded corners for the form */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow for the form */
            margin: 0 auto; /* Center the form horizontally */
        }
        .form-group {
            margin-bottom: 20px; /* Margin between form groups */
            width: 100%; /* Set width to 100% */
            box-sizing: border-box; /* Include padding and border in the width */
        }
        label {
            display: block; /* Display labels as blocks for better spacing */
            margin-bottom: 5px; /* Margin between labels */
            text-align: left; /* Left align labels */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%; /* Full width input fields */
            padding: 10px; /* Padding for input fields */
            border-radius: 3px; /* Rounded corners for input fields */
            border: 1px solid #ccc; /* Border for input fields */
        }
        .btn {
            padding: 10px 20px; /* Padding for buttons */
            border-radius: 5px; /* Rounded corners for buttons */
            transition: all 0.3s ease; /* Smooth transition for hover effect */
            text-decoration: none; /* Remove underline for anchor buttons */
            color: #fff; /* White text color for buttons */
            width: 100%; /* Full width for buttons */
        }
        .btn-primary {
            background-color: #1565c0; /* Blue background for primary button */
            border: 2px solid #1565c0; /* Blue border for primary button */
            margin-bottom: 10px; /* Margin between buttons */
        }
        .btn-primary:hover {
            background-color: #0d47a1; /* Darker blue on hover */
            border: 2px solid #0d47a1; /* Darker blue border on hover */
        }
    </style>
</head>
<body>
    <h1>เข้าสู่ระบบ</h1>
    <form method="POST" action="{{route('login_post')}}">
        @csrf
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name="Username" id="Username" class="form-control">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" class="form-control">
        </div>
        <input type="submit" value="Login" class="btn btn-primary my-3">
    </form>
</body>
</html>