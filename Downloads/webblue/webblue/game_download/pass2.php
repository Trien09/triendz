<?php
$_title = 'Ngọc Rồng Light - Đổi Mật Khẩu';
include_once 'head.php';
include_once 'set.php';
include_once 'conn.php';

if ($_login == null) {
	header("location:/");
	exit(); // prevent further script execution after redirect
}

$alert_messages = array();
if (isset($_POST['password'])) {
    $old_pass = isset_sql($_POST['password']);
    $new_pass = isset_sql($_POST['passwordcap2']);
    $re_pass = isset_sql($_POST['passwordcap2xacnhan']);

    if ($old_pass != $_password) {
        $alert_messages[] = "<script type='text/javascript'>$(document).ready(function() { swal('Thất bại', 'Mật khẩu hiện tại không đúng!', 'error'); });</script>";
    } elseif ($new_pass != $re_pass) {
        $alert_messages[] = "<script type='text/javascript'>$(document).ready(function() { swal('Thất bại', 'Mật khẩu mới không trùng nhau!', 'error'); });</script>";
    } else {
        $stmt = $connect->prepare("UPDATE account SET mkc2 = ? WHERE username = ?");
        $stmt->bind_param("ss", $new_pass, $_username);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $alert_messages[] = "<script type='text/javascript'>$(document).ready(function() { swal('Thành công', 'Đổi mật khẩu thành công!', 'success'); });</script>";
            } else {
                $alert_messages[] = "<script type='text/javascript'>$(document).ready(function() { swal('Thất bại', 'Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!', 'error'); });</script>";
            }
        } else {
            $alert_messages[] = "<script type='text/javascript'>$(document).ready(function() { swal('Thất bại', 'Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!', 'error'); });</script>";
        }
    }
}

// Hiển thị các thông báo cảnh báo
foreach ($alert_messages as $message) {
    echo $message;
}
?>
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
</style>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
	<!--  -->
</head>
<main class="flex-grow-1 flex-shrink-1">
	<script type="text/javascript"> new WOW().init(); </script>
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
							<i class="fas fa-coins me-2"></i> Nạp Tiền
						</a>


						<a href="lich-su-nap.php" class="list-group-item list-group-item-action">
							<i class="fas fa-credit-card me-2"></i> Lịch sử nạp
						</a>
						<a href="change-password.php" class="list-group-item list-group-item-action active">
							<i class="fa-sharp fa-solid fa-unlock me-2"></i> Đổi Mật Khẩu
						</a>
						<a href="/?out" class="list-group-item list-group-item-action ">
							<i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
						</a>

					</div>
				</div>
				<div class="col-md-9 pb-3 pt-2">
					<h3>Thay Đổi Mật Khẩu</h3>
					<table class="table">
				</div>
			</div>
			<div class="py-3">
				<div class="table-responsive">
					<form method="POST">
						<div class="mb-3">
							<label class="font-weight-bold">Mật khẩu hiện tại</label>
							<input type="password" class="form-control " name="password" id="password"
								placeholder="Mật khẩu hiện tại" required>
						</div>

						<div class="mb-3">
							<label class="font-weight-bold">Mật khẩu cấp 2</label>
							<input type="password" class="form-control " name="passwordcap2" id="passwordcap2"
								placeholder="Mật khẩu cấp 2" required>
						</div>

						<div class="mb-3">
							<label class="font-weight-bold">Nhập lại mật khẩu cấp 2</label>
							<input type="password" class="form-control " name="passwordcap2xacnhan"
								id="passwordcap2xacnhan" placeholder="Xác nhận mật khẩu cấp 2" required>
						</div>
						<button class="btn btn-outline-primary" type="submit">Thực hiện</button>
					</form>
				</div>
				<?php require_once 'end.php'; ?>
			</div>
		</main>