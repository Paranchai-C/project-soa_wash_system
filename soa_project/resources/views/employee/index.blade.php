<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Section</title>
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
        a {
            text-decoration: none; 
            color: #1565c0; 
            padding: 10px 20px; 
            border: 2px solid #1565c0; 
            border-radius: 5px;
            display: inline-block; 
            margin: 10px; 
            transition: all 0.3s ease; 
        }
        a:hover {
            background-color: #1565c0;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>พนักงาน</h1>
    <a href="{{ route('elogin') }}">เข้าสู่ระบบ</a>
</body>
</html>