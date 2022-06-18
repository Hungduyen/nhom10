<?php
include '../lib/session.php';
include '../classes/ungvien.php';
include '../classes/kynang.php';
include '../classes/linhvuc.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    $ungvien = new ungvien();
    $capnhatungvien = mysqli_fetch_assoc($ungvien->getProductbyIdAdmin($_GET['IDHS']));
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $result = $ungvien->update($_POST);
        $capnhatungvien = mysqli_fetch_assoc($ungvien->getProductbyIdAdmin($_GET['id']));
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
    <title>Chỉnh sửa ứng viên</title>
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
        <h1>Chỉnh sửa ứng viên</h1>
    </div>
    <div class="container">
        <?php
        if (isset($result)) {
            echo $result;
        }
        ?>
        <div class="form-add">
            <form action="suaungvien.php?IDHS=<?= $capnhatungvien['IDHS'] ?>" method="post" enctype="multipart/form-data">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="TenUV">Tên ứng viên</label>
                <input type="text" id="TenUV" name="TenUV" placeholder="Tên ứng viên.." value="<?= $capnhatungvien['TenUV'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="SDT">Số điện thoại</label>
                <input type="text" id="SDT" name="SDT" placeholder="Số điện thoại.." value="<?= $capnhatungvien['SDT'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="DiaChi">Địa chỉ</label>
                <input type="text" id="DiaChi" name="DiaChi" placeholder="Địa chỉ.." value="<?= $capnhatungvien['DiaChi'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="maPX">Mã phường xã</label>
                <input type="text" id="maPX" name="maPX" placeholder="Mã phường xã.." value="<?= $capnhatungvien['maPX'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="ViTri">Vị trí</label>
                <input type="text" id="ViTri" name="ViTri" placeholder="Vị trí.." value="<?= $capnhatungvien['ViTri'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="Trinhdo">Trình độ</label>
                <input type="text" id="Trinhdo" name="Trinhdo" placeholder="Trình độ.." value="<?= $capnhatungvien['Trinhdo'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="KinhNghiem">Kinh nghiệm</label>
                <input type="text" id="KinhNghiem" name="KinhNghiem" placeholder="Kinh nghiệm.." value="<?= $capnhatungvien['KinhNghiem'] ?>">

                <label for="LinhVuc">Lĩnh vực</label>
                <select id="LinhVuc" name="LinhVuc">
                    <?php foreach ($danhsachlinhvuc as $key => $value) {
                        if ($value['maLinhVuc'] == $capnhatungvien['LinhVuc']) { ?>
                            <option selected value="<?= $value['maLinhVuc'] ?>"><?= $value['tenLinhVuc'] ?></option>
                        <?php  } else { ?>
                            <option value="<?= $value['maLinhVuc'] ?>"><?= $value['tenLinhVuc'] ?></option>
                        <?php   } ?>
                    <?php } ?>
                </select>
                
                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="MucLuong">Mức lương</label>
                <input type="text" id="MucLuong" name="MucLuong" placeholder="Mức lương.." value="<?= $capnhatungvien['MucLuong'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="Noilamviec">Nơi làm việc</label>
                <input type="text" id="Noilamviec" name="Noilamviec" placeholder="Nơi làm việc.." value="<?= $capnhatungvien['Noilamviec'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="HinhThuc">Hình thức</label>
                <input type="text" id="HinhThuc" name="HinhThuc" placeholder="Hình thức.." value="<?= $capnhatungvien['HinhThuc'] ?>">

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="MucTieu">Mục tiêu</label>
                <input type="text" id="MucTieu" name="MucTieu" placeholder="Mục tiêu.." value="<?= $capnhatungvien['MucTieu'] ?>">

                
                <label for="kynang">Kỹ năng</label>
                <select id="kynang" name="kynang">
                    <?php foreach ($danhsachkynang as $key => $value) {
                        if ($value['maKN'] == $capnhatungvien['kynang']) { ?>
                            <option selected value="<?= $value['maKN'] ?>"><?= $value['tenKN'] ?></option>
                        <?php  } else { ?>
                            <option value="<?= $value['maKN'] ?>"><?= $value['tenKN'] ?></option>
                        <?php   } ?>
                    <?php } ?>
                </select>

                <input type="text" hidden name="IDHS" style="display: none;" value="<?= $capnhatungvien['IDHS'] ?>">
                <label for="NgaySinh">Ngày sinh</label>
                <input type="date" id="NgaySinh" name="NgaySinh" placeholder="Ngày sinh.." value="<?= $capnhatungvien['NgaySinh'] ?>">

                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
    
<?php include 'footer.php' ?>
</body>

</html>

