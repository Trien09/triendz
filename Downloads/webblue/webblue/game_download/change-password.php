<?php
$_title = 'NRO Kesu - Đổi MK';
include_once 'head.php';
$_alert = null;
if($_login == null) {header("location:/");}
if(isset($_POST['password']))
{
	$old_pass = isset_sql($_POST['password']);
	$new_pass = isset_sql($_POST['new_password']);
	$re_pass = isset_sql($_POST['new_password_confirmation']);
	if($old_pass != $_password)
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thất bại",
				text: "Mật khẩu hiện tại không đúng!",
				type: "error",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	else
	{
		if($new_pass != $re_pass)
		{
			echo '
			<script type="text/javascript">
			
			$(document).ready(function(){
			
			  swal({
					title: "Thất bại",
					text: "Mật khẩu mới không trùng nhau!",
					type: "error",
					confirmButtonText: "OK",
			  })
			});
			
			</script>
			';
		}
		else
		{
			$query = _query(_update('account',"password='$new_pass'","username='$_username'"));
			if($query)
			{
				echo '
				<script type="text/javascript">
				
				$(document).ready(function(){
				
				  swal({
						title: "Thành công",
						text: "Đổi mật khẩu thành công!",
						type: "success",
						confirmButtonText: "OK",
				  })
				});
				
				</script>
				';
			}
			else
			{
				echo '
				<script type="text/javascript">
				
				$(document).ready(function(){
				
				  swal({
						title: "Thất bại",
						text: "Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!",
						type: "error",
						confirmButtonText: "OK",
				  })
				});
				
				</script>
				';
			}
		}
	}
}
?>
<main class="flex-grow-1 flex-shrink-1">
</br>
	<div class="container pb-5">
	<?php
   if($_login != null) {
      if($_status == "0") {
   echo '<div class="alert alert-info">Để có thể đăng nhập vào game, bạn cần phải <a href="/active">kích hoạt tài khoản</a> (Phí: 10,000 DCoin = 10,000 VND).</div>';
   }
   elseif($_status == "1") {
   echo '<div class="alert alert-info">Tài khoản đang bị khóa, để mở lại bạn cần phải <a href="/active">mở khóa tài khoản</a> (Phí: 20,000 TCoin = 20,000 VND).</div>';
   }
      if($_status == "-1") {
   echo '<div class="alert alert-info">Tài khoản đã kích hoạt thành viên</div>';
   }
   }
   ?>
	<div class="col-md-12">
            <h3 class="mt-0 mb-20">Thay đổi mật khẩu</h3>
            <form method="POST">
                <div class="mb-3">
				<label class="font-weight-bold">Mật khẩu hiện tại</label>
						<input type="text" class="form-control " name="password" id="password" placeholder="Mật khẩu hiện tại" required>
                </div>

                <div class="mb-3">
				<label class="font-weight-bold">Mật khẩu mới</label>
                    <input type="text" class="form-control " name="new_password" id="new_password" placeholder="Mật khẩu mới" required>
                </div>

                <div class="mb-3">
				<label class="font-weight-bold">Nhập lại mật khẩu</label>
                    <input type="text" class="form-control " name="new_password_confirmation" id="new_password_confirmation" placeholder="Xác nhận mật khẩu mới" required>
                </div>
                <button class="btn btn-info btn-block" type="submit">Thực hiện</button>
            </form>
        </div>
		<?php
include_once 'end.php';
?>
	</div>

</main>
