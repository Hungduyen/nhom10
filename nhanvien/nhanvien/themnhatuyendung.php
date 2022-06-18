<?php
include '../lib/session.php';
include '../classes/nhatuyendung.php';
include '../classes/linhvuc.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $nhatuyendung = new nhatuyendung();
        $result = $nhatuyendung->insert($_POST, $_FILES);
    }
} else {
    header("Location:../index.php");
}

$linhvuc = new linhvuc();
$danhsachlinhvuc = $linhvuc->getAll();
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
    <title>Thêm mới nhà tuyển dụng</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="nhatuyendung.php" style="font-size: 24px;">Quay lại trang nhà tuyển dụng</a></label>
        <ul>
            <li><a href="ungvien.php">Quản lý ứng viên</a></li>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Thêm mới nhà tuyển dụng</h1>
    </div>
    <div class="container">
        <p style="color: green;"><?= !empty($result) ? $result : '' ?></p>
        <div class="form-add">
            <form action="themnhatuyendung.php" method="post" enctype="multipart/form-data">

                <label for="tenCongTy">Tên công ty</label>
                <input type="text" id="tenCongTy" name="tenCongTy" placeholder="Tên công ty.." required>

                <label for="email">Thư điện tử</label>
                <input type="text" id="email" name="email" placeholder="Thư điện tử.." required>

                <label for="matKhau">Mật khẩu</label>
                <input type="text" id="matKhau" name="matKhau" placeholder="Mật khẩu.." required>

                <label for="tenNguoiLienHe">Tên người liên hệ</label>
                <input type="text" id="tenNguoiLienHe" name="tenNguoiLienHe" placeholder="Tên người liên hệ.." required>

                <label for="soDienThoai">Số điện thoại</label>
                <input type="text" id="soDienThoai" name="soDienThoai" placeholder="Số điện thoại.." required>

                <label for="maSoThue">Mã số thuế</label>
                <input type="text" id="maSoThue" name="maSoThue" placeholder="Mã số thuế.." required>

                <label for="diaChi">Địa chỉ</label>
                <input type="text" id="diaChi" name="diaChi" placeholder="Địa chỉ.." required>

                <label for="maLinhVuc">Lĩnh vực</label>
                <select id="maLinhVuc" name="maLinhVuc">
                    <?php
                    foreach ($danhsachlinhvuc as $key => $value) { ?>
                        <option value="<?= $value['maLinhVuc'] ?>"><?= $value['tenLinhVuc'] ?></option>
                    <?php }
                    ?>
                </select>

                <label for="maPX">Mã phường xã</label>
                <input type="text" id="maPX" name="maPX" placeholder="Mã phường xã.." required>

                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
<?php include 'footer.php' ?>
</body>

</html>