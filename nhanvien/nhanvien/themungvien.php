<?php
include '../lib/session.php';
include '../classes/ungvien.php';
include '../classes/kynang.php';
include '../classes/linhvuc.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $ungvien = new ungvien();
        $result = $ungvien->insert($_POST, $_FILES);
    }
} else {
    header("Location:../index.php");
}

$kynang = new kynang();
$danhsachkynang = $kynang->getAll();

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
    <title>Thêm mới ứng viên</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="ungvien.php" style="font-size: 24px;">Quay lại trang ứng viên</a></label>
        <ul>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Thêm mới ứng viên</h1>
    </div>
    <div class="container">
        <p style="color: green;"><?= !empty($result) ? $result : '' ?></p>
        <div class="form-add">
            <form action="themungvien.php" method="post" enctype="multipart/form-data">
                <label for="TenUV">Tên ứng viên</label>
                <input type="text" id="TenUV" name="TenUV" placeholder="Tên ứng viên.." required>

                <label for="SDT">Số điện thoại</label>
                <input type="text" id="SDT" name="SDT" placeholder="Số điện thoại.." required>

                <label for="DiaChi">Địa chỉ</label>
                <textarea type="text" id="DiaChi" name="DiaChi" placeholder="Địa chỉ.." required></textarea>

                <label for="maPX">Mã phường xã</label>
                <input type="text" id="maPX" name="maPX" placeholder="Mã phường xã.." required>
                
                <label for="ViTri">Vị trí</label>
                <input type="text" id="ViTri" name="ViTri" placeholder="Vị trí.." required>

                <label for="Trinhdo">Trình độ</label>
                <input type="text" id="Trinhdo" name="Trinhdo" placeholder="Trình độ.." required>

                <label for="KinhNghiem">Kinh nghiệm</label>
                <input type="text" id="KinhNghiem" name="KinhNghiem" placeholder="Kinh nghiệm.." required>

                <label for="LinhVuc">Lĩnh vực</label>
                <select id="LinhVuc" name="LinhVuc">
                    <?php
                    foreach ($danhsachlinhvuc as $key => $value) { ?>
                        <option value="<?= $value['maLinhVuc'] ?>"><?= $value['tenLinhVuc'] ?></option>
                    <?php }
                    ?>
                </select>

                <label for="MucLuong">Mức lương</label>
                <input type="text" id="MucLuong" name="MucLuong" placeholder="Mức lương.." required>

                <label for="NoiLamViec">Nơi làm việc</label>
                <textarea type="text" id="NoiLamViec" name="NoiLamViec" placeholder="Nơi làm việc.." required></textarea>

                <label for="HinhThuc">Hình thức</label>
                <input type="text" id="HinhThuc" name="HinhThuc" placeholder="Hình thức.." required>

                <label for="MucTieu">Mục tiêu</label>
                <textarea type="text" id="MucTieu" name="MucTieu" placeholder="Mục tiêu.." required></textarea>

                <label for="kynang">Kỹ năng</label>
                <select id="kynang" name="kynang">
                    <?php
                    foreach ($danhsachkynang as $key => $value) { ?>
                        <option value="<?= $value['maKN'] ?>"><?= $value['tenKN'] ?></option>
                    <?php }
                    ?>
                </select>

                <label for="NgaySinh">Ngày sinh</label>
                <input type="date" name="NgaySinh" id="NgaySinh" required>

                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>