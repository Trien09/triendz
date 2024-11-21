<?php
include_once 'head.php';
include_once 'set.php';
if($_login == null) {header("location:/user");}
$_active = isset($_active) ? $_active : null;
$_tcoin = isset($_tcoin) ? $_tcoin : 0;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ngọc Rồng Blue</title>

    <link rel="icon" href="/img/nro.png" type="image/png">
    <!-- Bootstrap core CSS -->
    <link href="../../../getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="../../../getbootstrap.com/docs/5.0/dist/js/bootstrap.min.js"></script>
</head>
<style>
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

<?php
    function get_user_ip() {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            } else {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
?>
<body>
    <div class="container py-3">
         <main>    
                <div class="row">
        <div class="col-md-3 pb-3 pt-2">
            <div class="list-group d-none d-sm-block">
    <a href="profile.php" class="list-group-item list-group-item-action  active">
      <i class="fas fa-user me-2"></i> Thông tin tài khoản
    </a>
    <a href="nap-tien.php" class="list-group-item list-group-item-action ">
      <i class="fas fa-coins me-2"></i> Nạp thẻ cào
    </a>
        
    
    <a href="top-nap.php" class="list-group-item list-group-item-action ">
      <i class="fas fa-credit-card me-2"></i> Top Nạp
    </a>
   <a href="?out" class="list-group-item list-group-item-action ">
      <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
    </a>

</div>
        </div>
        <div class="col-md-9 pb-3 pt-2">
            <h5>Tài khoản</h5>
                        <table class="table">
                <tbody>
                       
                    <tr>
                        <th scope="row">Tài khoản đăng nhập</th>
                        <th><div class="w-50" style='font-size:16px'><?php echo $_username; ?></div></th>
                    </tr>
                  <tr>
                        <th scope="row">Trạng Thái Thành Viên</th>
                        <td><div class="w-50" style='font-size:16px'><?php if($_status == "0") {
			echo 'Chưa kích hoạt';
		}
        else if($_status == "1") {
            echo 'Đang bị khoá';
        }
		else if($_status == "-1") {
			echo 'Đã kích hoạt';
		} ?></div></td>
                    </tr>
                    <tr>
                        <th scope="row">TCoin</th>
                        <td><div class="text-danger"><b><?php echo number_format($_coin); ?> TCoin</b></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Tổng đã nạp</th>
                        <td><div class="text-danger"><b><?php echo number_format($_tcoin); ?> TCoin</b>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Địa chỉ ip</th>
                        <td><div class="w-50" style='font-size:16px'><?php echo get_user_ip(); ?></div></td>
                    </tr>
                    
                    <tr>
                        <th scope="row">Đăng xuất</th>
                        <td>
                            <a class="btn btn-outline-primary" href="?out" style="font-weight: 500">Đăng xuất</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row pt-2">
                            </div>

        </div>
    </div>
        </main>


<footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="text-center">
                Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
                Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
            </div>
        </footer>
    </div>


</body>