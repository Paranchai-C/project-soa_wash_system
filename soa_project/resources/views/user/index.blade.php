<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
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
        h2 {
            margin-bottom: 20px; /* Increased margin for better spacing */
        }
        a {
            text-decoration: none;
            color: #1565c0; /* Blue color for links */
            padding: 10px 20px; /* Added padding for better button appearance */
            border: 2px solid #1565c0; /* Blue border for buttons */
            border-radius: 5px; /* Rounded corners for buttons */
            display: inline-block; /* Display as inline-block to allow padding */
            margin: 10px; /* Added margin for spacing between buttons */
            transition: all 0.3s ease; /* Smooth transition for hover effect */
        }
        a:hover {
            background-color: #1565c0; /* Change background color on hover to blue */
            color: #fff; /* Change text color on hover to white */
        }
    </style>
</head>
<body>
    <h1>ยินดีต้อนรับ</h1> 
    <h2><a href="{{route('login')}}">เข้าสู่ระบบ</a></h2>
    <h2><a href="/register">ลงทะเบียน</a></h2>
</body>
</html>
