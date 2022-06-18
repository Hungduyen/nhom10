<?php
include '../lib/session.php';
include '../classes/ungvien.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    # code...
} else {
    header("Location:../index.php");
}

$ungvien = new ungvien();
$list = $ungvien->hi((isset($_GET['page']) ? $_GET['page'] : 1));
$phantrangungvien = $ungvien->phantrang();
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
    <title>Danh sách ứng viên</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-plus"></i>
        </label>
        <label class="logo"><a href="/../nhanvien">Trang chủ</a></label>
        <ul>
            <li><a href="ungvien.php" class="active">Quản lý ứng viên</a></li>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Danh sách ứng viên</h1>
    </div>
    <div class="addNew">
        <a href="themungvien.php">Thêm mới ứng viên</a>
    </div>
    <div class="container">
        <?php $count = 1;
        if ($list) { ?>
            <table class="list">
                <tr>
                    <th>STT</th>
                    <th>Tên ứng viên</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Mã phường xã</th>
                    <th>Vị trí</th>
                    <th>Trình độ</th>
                    <th>Kinh nghiệm</th>
                    <th>Lĩnh vực</th>
                    <th>Mức lương</th>
                    <th>Nơi làm việc</th>
                    <th>Hình thức</th>
                    <th>Mục tiêu</th>
                    <th>Kỹ năng</th>
                    <th>Thao tác</th>
                </tr>
                <?php foreach ($list as $key => $value) { ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><?= $value['TenUV'] ?></td>
                        <td><?= $value['NgaySinh'] ?></td>
                        <td><?= $value['SDT'] ?></td>
                        <td><?= $value['DiaChi'] ?></td>
                        <td><?= $value['maPX'] ?></td>
                        <td><?= $value['ViTri'] ?></td>
                        <td><?= $value['Trinhdo'] ?></td>
                        <td><?= $value['KinhNghiem'] ?></td>
                        <td><?= $value['tenLV'] ?></td>
                        <td><?= $value['MucLuong'] ?></td>
                        <td><?= $value['Noilamviec'] ?></td>
                        <td><?= $value['HinhThuc'] ?></td>
                        <td><?= $value['MucTieu'] ?></td>
                        <td><?= $value['tenKN'] ?></td>
                        <td><form >
                            <a href="suaungvien.php?IDHS=<?= $value['IDHS'] ?>">Sửa</a>
                            </form>
                            <form >
                                <a href="xoaungvien.php?IDHS=<?= $value['IDHS'] ?>">Xóa</a>
                            </form>
                        </td> 
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h3>Chưa có ứng viên nào</h3>
        <?php } ?>
        <div class="pagination">
            <a href="ungvien.php?page=<?= (isset($_GET['page'])) ? (($_GET['page'] <= 1) ? 1 : $_GET['page'] - 1) : 1 ?>">&laquo;</a>
            <?php
            for ($i = 1; $i <= $phantrangungvien; $i++) {
                if (isset($_GET['page'])) {
                    if ($i == $_GET['page']) { ?>
                        <a class="active" href="ungvien.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php } else { ?>
                        <a href="ungvien.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php  }
                } else {
                    if ($i == 1) { ?>
                        <a class="active" href="ungvien.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php  } else { ?>
                        <a href="ungvien.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php   } ?>
                <?php  } ?>
            <?php }
            ?>
            <a href="ungvien.php?page=<?= (isset($_GET['page'])) ? $_GET['page'] + 1 : 2 ?>">&raquo;</a>

        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>