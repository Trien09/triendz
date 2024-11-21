<?php
include_once 'set.php';
$_title = "NRO TEA - Đăng Ký";
include_once 'head1.php';
$_alert = null;
if ($_login == null) 
{
	if(isset($_POST['username']))
	{
		  

      			$username = isset_sql($_POST['username']);
			$password = isset_sql($_POST['password']);
			$repassword = isset_sql($_POST['repassword']);
			
			if($password == $repassword) {
				$txt = _insert('account',"username,password","'$username','$password'");
				$read = _select("*",'account',"username='$username'");
				if(is_array(_fetch($read)))
				{
					echo '
					<script type="text/javascript">
					
					$(document).ready(function(){
					
					  swal({
							title: "Thất bại",
							text: "Tài khoản này đã tồn tại, vui lòng chọn tài khoản khác!",
							type: "error",
							confirmButtonText: "OK",
					  })
					});
					
					</script>
					';
				}else
				{
					$kiemtra = _query($txt);
					if($kiemtra)
					{
						echo '
						<script type="text/javascript">
						
						$(document).ready(function(){
						
						  swal({
								title: "Thành công",
								text: "Đăng kí thành công!!",
								type: "success",
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
				echo '
				<script type="text/javascript">
				
				$(document).ready(function(){
				
				  swal({
						title: "Thất bại",
						text: "Hai mật khẩu không khớp nhau, vui lòng kiểm tra lại!",
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
	header('location:/user.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trang Chủ Chính Thức</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="description" content="Website chính thức của Chú Bé Rồng Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!" />
  <meta name="keywords" content="Chú Bé Rồng Online,ngoc rong mobile, game ngoc rong, game 7 vien ngoc rong, game bay vien ngoc rong" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Website chính thức của Chú Bé Rồng Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!" />
  <meta name="twitter:description" content="Website chính thức của Chú Bé Rồng Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!" />
  <meta name="twitter:image" content="https://ngocrongsao.com/image/nrogreen.png" />
  <meta name="twitter:image:width" content="200" />
  <meta name="twitter:image:height" content="200" />
  <link href="https://ngocrongsao.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://ngocrongsao.com/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="https://ngocrongsao.com/vendor/jquery/jquery.min.js"></script>
  <script src="https://ngocrongsao.com/vendor/notify/notify.js"></script>
  <link rel="icon" href="https://ngocrongsao.com/image/icon.png?v=99">
  <link href="https://ngocrongsao.com/asset/main.css" rel="stylesheet">
</head>
</style><body>
<div class="container py-3">
<header>
</header><main>
<form class="form-signin" method="POST">
<h1 class="h3 mb-3 font-weight-normal text-center">Nhập thông tin đăng ký</h1>
 <input type="hidden" name="_token" value="JEGpj39vMoqzUAPDoHWTY8Y4jJiy4t0mhPST9nds">
<?php echo $_alert; ?>
			<div class="form-group">
                <label>Tài khoản</label>
                <input type="text" class="form-control" placeholder="Tài khoản" required="" name="username" value="">
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="repassword">
            </div><br>
<button class="btn btn-primary w-100" type="submit">Đăng ký</button>
<div class="text-center pt-2">
Bạn đã có tài khoản? <a href="login.php">Đăng nhập ngay</a>
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
