<?php
include '../lib/session.php';
include '../classes/linhvuc.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $linhvuc = new linhvuc();
        $result = $linhvuc->insert($_POST['name']);
    }
} else {
    header("Location:../index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://use.fontawesome.com/2145adbb48.js"></script>
    <script src="https://kit.fontawesome.com/a42aeb5b72.js" crossorigin="anonymous"></script>
    <title>Thêm mới lĩnh vực</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="linhvuc.php" style="font-size: 24px;">Quay lại trang lĩnh vực</a>
        <ul>
            <li><a href="ungvien.php">Quản lý ứng viên</a></li>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Thêm mới lĩnh vực</h1>
    </div>
    <div class="container">
        <p style="color: green;"><?= !empty($result) ? $result : '' ?></p>
        <div class="form-add">
            <form action="themlinhvuc.php" method="post">
                <label for="name">Tên lĩnh vực</label>
                <input type="text" id="name" name="name" placeholder="Tên lĩnh vực.." required>

                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
<?php include 'footer.php' ?>
</body>

</html>