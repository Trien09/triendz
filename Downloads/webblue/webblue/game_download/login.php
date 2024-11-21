<?php
include_once 'set.php';
$_title = "NRO TEA - Đăng Nhập";
include_once 'head1.php';
$alert = null;
if($_login == null)
{
	if(isset($_POST['username']))
	{

			$user = htmlspecialchars($_POST['username']);
			$pass = htmlspecialchars($_POST['password']);
			$select = _fetch(_select("*",'account',"username='$user'"));
            
			if($select != null && $select['password'] == $pass)
			{
				$_SESSION['account'] = $user;
				header('location:/index.php');
			}
			else
			{
                echo '
                <script type="text/javascript">
                
                $(document).ready(function(){
                
                  swal({
                        title: "Thất bại",
                        text: "Thông tin đăng nhập không chính xác!",
                        type: "error",
                        confirmButtonText: "OK",
                  })
                });
                
                </script>
                ';
			}
		
	}
}
else
{
	header("location:/");
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ngọc Rồng Blue</title>
<link rel="icon" href="assets/images/nro.png" type="image/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../www.google.com/recaptcha/api.js" async defer></script>
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
        background-color: #f44336;
        border-color: #f44336;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f44336;
    }

    .nav-link {
        color: #f44336;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
    .copy-text{
        cursor: pointer;
    }
</style><body>
<div class="container py-3">
<header>
</header><main>
<form class="form-signin" method="POST">
<div class="text-center mb-2">
</div>
  <h1 class="h3 mb-3 fw-normal text-center">Vui lòng đăng nhập</h1>
<input type="hidden" name="_token" value="JEGpj39vMoqzUAPDoHWTY8Y4jJiy4t0mhPST9nds">
            <?php echo $alert; ?>
            <label class="sr-only">Tài khoản</label>
            <input type="text" class="form-control" placeholder="Tài khoản" required="" name="username">
            <label class="sr-only">Mật khẩu</label>
            <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password">
            <div class="checkbox mb-3">
<label>
<input type="checkbox" name="remember" value="forever"> Nhớ đăng nhập
</label>
</div>
<button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
<div class="text-center pt-2">
Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a>
</div>
<div class="text-center pt-2">
<a href="#">Quên mật khẩu</a>
</div>
</form>
<style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
  </style>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appa368.js?_=1668687096"></script>
		<?php
include_once 'end.php';
?>
</div>

