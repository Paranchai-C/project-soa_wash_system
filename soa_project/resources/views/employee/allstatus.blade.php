<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 15px;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        .nav-link {
            color: #fff;
        }

        .container {
            margin-right: 50px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div id="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ewel') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('allstatus') }}">จัดการออเดอร์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('history') }}">ประวัติ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/employee">ออกจากระบบ</a>
            </li>
        </ul>
    </div>

    <!-- Page content -->
    <div>

    </div>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($order as $o)
                    @if ($o['order_status'] != 'done')
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-img-top">
                                <img src="{{ asset('image_user/' . $o['user_id'] . '_' . $o['order_id']) }}"
                                    class="img-fluid" alt="Image" />
                            </div>

                            <div class="card-body">
                                <p class="card-text text-left">
                                    id : {{ $o['order_id'] }}<br>
                                    user: {{ $o['username'] }}<br>
                                    status : {{ $o['order_status'] }} <br>
                                    น้ำยาปรับผ้านุ้ม : {{ $o['softener_name'] }}<br>
                                    ประเภทน้ำ : {{ $o['temp_name'] }}<br>
                                    package : size {{ $o['package_name'] }}<br>
                                    ราคารวม : <?php if ($o['order_plusdry'] == 1) {
                                        echo intval($o['package_price']) + intval($o['softener_price']) + $o['temp_price'] + 10;
                                    } else {
                                        echo intval($o['package_price']) + intval($o['softener_price']) + $o['temp_price'];
                                    }
                                    ?><br>
                                    คนส่ง : {{ $o['sender_name'] }}
                                </p>
                                <div class="mt-auto">
                                    @if ($o['order_status'] == 'not_approved')
                                        <a href="{{ route('delete', $o['order_id']) }}">
                                            <button type="button" class="btn btn-danger btn-sm  float-end">ลบ</button>
                                        </a>
                                        <a href="{{ route('approve', $o['order_id']) }}">
                                            <button type="button" class="btn btn-sm btn-success ">อนุมัติ</button>
                                        </a>
                                    @elseif($o['order_status'] == 'approved')
                                        {

                                        }
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
