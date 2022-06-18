<?php
include '../lib/session.php';
include '../classes/congty.php';
include '../classes/nhatuyendung.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    $congty = new congty();
    $capnhatcongty = mysqli_fetch_assoc($congty->getProductbyIdAdmin($_GET['maCongTy']));
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $result = $congty->update($_POST, $_FILES);
        $capnhatcongty = mysqli_fetch_assoc($congty->getProductbyIdAdmin($_GET['maCongTy']));
    }
} else {
    header("Location:../index.php");
}

$nhatuyendung = new nhatuyendung();
$danhsachnhatuyendung = $nhatuyendung->getnhatuyendung();
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
    <title>Chỉnh sửa công ty</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="congty.php" style="font-size: 24px;">Quay lại trang công ty</a></label>
        <ul>
            <li><a href="ungvien.php">Quản lý ứng viên</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Chỉnh sửa công ty</h1>
    </div>
    <div class="container">
        <?php
        if (isset($result)) {
            echo $result;
        }
        ?>
        <div class="form-add">
            <form action="suacongty.php?maCongTy=<?= $capnhatcongty['maCongTy'] ?>" method="post" enctype="multipart/form-data">

                <label for="noiDungGioiThieu">Nội dung giới thiệu</label>
                <textarea name="noiDungGioiThieu" id="noiDungGioiThieu" cols="30" rows="10" placeholder="Nội dung giới thiệu..."><?= $capnhatcongty['noiDungGioiThieu'] ?></textarea>

                <label for="logo">Logo cũ:</label>
                <img src="uploads/<?= $capnhatcongty['logo'] ?>" style="height: 200px;" id="logo"> <br>

                <label for="newlogo">Chọn Logo mới</label>
                <input type="file" id="newlogo" name="logo">

                <label for="maNhaTuyenDung">Nhà tuyển dụng</label>
                <select id="maNhaTuyenDung" name="maNhaTuyenDung">
                    <?php foreach ($danhsachnhatuyendung as $key => $value) {
                        if ($value['maNhaTuyenDung'] == $capnhatcongty['maNhaTuyenDung']) { ?>
                            <option selected value="<?= $value['maNhaTuyenDung'] ?>"><?= $value['tenCongTy'] ?></option>
                        <?php  } else { ?>
                            <option value="<?= $value['maNhaTuyenDung'] ?>"><?= $value['tenCongTy'] ?></option>
                        <?php   } ?>
                    <?php } ?>
                </select>
                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
<?php include 'footer.php' ?>
</body>

</html>