<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
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
        h2 {
            margin-bottom: 20px;
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
<button style="background: none; border: none;">
<h2><a href="/" style="text-decoration: none; color: blue;">
        <i class="fa-solid fa-house" style="color: blue;"></i> 
        หน้าแรก
    </a></h2>
</button>
    <h1>ยินดีต้อนรับ</h1> 
    <h2><a href="{{route('login')}}">เข้าสู่ระบบ</a></h2>
    <h2><a href="/register">สมัครสมาชิก</a></h2>
</body>
</html>
