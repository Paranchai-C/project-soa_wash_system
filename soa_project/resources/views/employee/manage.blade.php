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
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div id="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="/employee/dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employee/manage">อนุมัติออเดอร์</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">จัดการรับ-ส่ง</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employee/history">ประวัติออเดอร์</a>
      </li>
    </ul>
  </div>

  <!-- Page content -->
  <div id="content">
    <h2>Manage Order</h2>
    <p>Welcome to the admin dashboard. You can manage users, products, and settings here.</p>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Information</th>
              </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>10/2/2564</td>
                <td><button type="button" class="btn btn-secondary">ดู</button></td>
            </tbody>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
