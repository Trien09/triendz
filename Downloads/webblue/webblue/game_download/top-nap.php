<?php
$_alert = null;
$_title = "NRO TEA - TOP NAP";
include_once 'head.php';
include 'connect.php';
?>
<style>
    .my-table {
    max-width: 1000px; /* Đặt chiều rộng tối đa cho bảng */
    margin: 0 auto; /* Căn giữa bảng */
}

/* Làm cho tiêu đề cố định ở đầu bảng */
.blueTable thead th {
    position: sticky;
    top: 0;
    z-index: 1;
}
    .btn-primary {
        border-color: #f44336 !important;
        color: #fff !important;
    }

    .border-primary {
        border-color: #f44336 !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: #f44336 !important;
    }

    .btn-outline-primary:hover {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-outline-primary {
        color: #f44336;
        border-color: #f44336;
    }

    .feature-box {
        padding: 38px 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.2em;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #212529;
    }

    .list-group-item.active {
        background-color: #007bff;
        border-color: #007bff;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background-color: #007bff;
    }

    .nav-link {
        color: #007bff;
    }

    .nav-link:focus, .nav-link:hover {
        color: #cd3a2f;
    }

</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ngọc Rồng Blue</title>
<link rel="icon" href="/img/nro.png" type="img/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/app3007.js?_=1668687090"></script>
</head>
<section class="text-center container">
<h2 class="fw-light">TOP NẠP THẺ</h2>
</section>
<main class="flex-grow-1 flex-shrink-1">
    </br>
    <div class="container py-3">
        <main>
            <div class="row">
<div class="col-md-3 pb-3 pt-2">
                    <div class="list-group d-none d-sm-block">
                        <a href="profile.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user me-2"></i> Thông tin tài khoản
                        </a>
                        <a href="nap-tien.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-coins me-2"></i> Nạp thẻ cào
                        </a>


                        <a href="top-nap.php" class="list-group-item list-group-item-action active">
                            <i class="fas fa-credit-card me-2"></i> Top Nạp
                        </a>
                        <a href="/?out" class="list-group-item list-group-item-action ">
                            <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                        </a>

                    </div>
                </div>
<div class="col-md-9 pb-3 pt-2">
<div class="card-body">
<table class="table table-bordered blueTable my-table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Game</th>
            <th scope="col">Tổng Nạp</th>
        </tr>
    </thead>  
    <tbody>
    <?php 
include("./api/config.php");
include('connect.php');

$query = "SELECT name, SUM(vnd) AS vnd FROM `player` GROUP BY name ORDER BY vnd DESC LIMIT 10";
$result = $conn->query($query);

$stt = 1;
if ($result === false) {
    echo 'Lỗi truy vấn SQL: '.$conn->error;
} elseif ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$stt.'</td>
            <td>'.$row['name'].'</td>
            <td>'.number_format($row['vnd']).'đ</td>
        </tr>
        ';
        $stt++;
    }
} else {
    echo '
    <tr>
        <td colspan="3" align="center"><span style="font-size:100%;"><< Lịch Sử Trống >></span></td>
    </tr>
    ';
}

// Đóng kết nối
$conn->close();
?>


    </tbody>
</table>
</div>
</div>
</div>
    </div>
    </div>
<?php   
include_once('end.php');
?>