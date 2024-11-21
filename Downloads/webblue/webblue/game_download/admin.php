<?php
include_once('./set.php');
include_once('connect.php');
// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ngọc Rồng Light</title>
    <link rel="icon" href="/img/nro.png" type="img/png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-baUM7KUwZ0zgwyrYbMvPzuz9X2Qn1GK68WvZQT19xJpBbbwTHe8A7WgjvJPmjG9LbRrLR8dO+ZjhgzIhFq3tHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

    <!--  -->

    <style type="text/css">
        .sidebar {
            position: fixed;
            left: 20px;
            top: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 0 auto;
            border-radius: 5px;
            height: 70%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li a {
            display: block;
            padding: 20px;
            color: #333;
            text-decoration: none;
        }

        li a:hover {
            background-color: #ccc;
            color: #fff;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        h2 {
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .unban-button {
            padding: 6px 12px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .unban-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        #search-box {
            margin-left: auto;
            width: 200px;
            padding: 5px;
            border-radius: 5px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination a,
        .pagination span {
            margin: 0 5px;
            padding: 5px 10px;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #f1f1f1;
        }

        .pagination .current-page {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Thông tin máy chủ</h2>

        <p>Tổng số lượng id:
            <?php echo $id; ?>
        </p>
        <p>Tổng số lượng tài khoản bị khoá:
            <?php echo $ban; ?>
        </p>
        <p>Tổng số lượng tài khoản đã mở thành viên:
            <?php echo $active; ?>
        </p>

        <?php if (mysqli_num_rows($banned) > 0): ?>
            <h3>Danh sách các tài khoản đã bị ban:</h3>

            <table>
                <thead>
                    <tr class="table-header">
                        <th>
                            <span>Tên tài khoản</span>
                            <input type="text" id="search-box" placeholder="Tìm kiếm tài khoản"
                                value="<?php echo $searchValue; ?>">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($banned)): ?>
                        <tr>
                            <!-- Thêm nút "Unban" -->
                            <td class="banned">
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="pagination">
            </div>
    </div>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../admin.php">Trang Chủ Admin</a></li>
            <li><a href="../admin/ban.php">Ban người chơi</a></li>
            <li><a href="../admin/addmoney.php">Cộng tiền</a></li>
            <li><a href="../admin/chiso.php">Cộng chỉ số</a></li>
        </ul>
    </div>
</body>

</html>