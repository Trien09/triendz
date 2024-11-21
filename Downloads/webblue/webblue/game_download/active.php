<?php
include_once 'set.php';
$_title = "NRO TEA - Thanh toán";
include_once 'head.php';

if ($_login == null) {
    header("location:/");
}

// Check user status and coin balance
if ($_status == '-1') {
    $_alert = array(
        'type' => 'error',
        'title' => 'Thất bại',
        'text' => 'Tài khoản của bạn đã được kích hoạt!'
    );
} elseif ($_status == '0' && $_coin < 20000) {
    $_alert = array(
        'type' => 'error',
        'title' => 'Số dư không đủ',
        'text' => 'Bạn không đủ 20.000 KCoin. Vui lòng nạp thêm tiền vào tài khoản để kích hoạt nhé!'
    );
} elseif ($_status == '1' && $_coin < 20000) {
    $_alert = array(
        'type' => 'error',
        'title' => 'Số dư không đủ',
        'text' => 'Bạn không đủ 20.000 KCoin. Vui lòng nạp thêm tiền vào tài khoản để mở lại tài khoản!'
    );
} elseif ($_status == '0' && $_coin >= 20000) {
    $coin = $_coin - 20000;
    $query = _query(_update('user', "active='-1',vnd='$coin'", "username='$_username'"));
    
    if ($query) {
        $_alert = array(
            'type' => 'success',
            'title' => 'Thành công',
            'text' => 'Kích hoạt tài khoản thành công. Bây giờ bạn đã có thể đăng nhập vào game!'
        );
    } else {
        $_alert = array(
            'type' => 'error',
            'title' => 'Thất bại',
            'text' => 'Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!'
        );
    }
} elseif ($_status == '1' && $_coin >= 20000) {
    $coin = $_coin - 20000;
    $query = _query(_update('user', "active='$-1',vnd='$coin'", "username='$_username'"));

    if ($query) {
        $_alert = array(
            'type' => 'success',
            'title' => 'Thành công',
            'text' => 'Mở khóa tài khoản thành công. Bây giờ bạn đã có thể đăng nhập vào game!'
        );
    } else {
        $_alert = array(
            'type' => 'error',
            'title' => 'Thất bại',
            'text' => 'Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!'
        );
    }
}

// Show alert message
if ($_alert != null) { 
    echo '
        <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    title: "'.$_alert['title'].'",
                    text: "'.$_alert['text'].'",
                    type: "'.$_alert['type'].'",
                    confirmButtonText: "OK",
                });
            });
		</script>
			';
}

header('location:/');
?>
