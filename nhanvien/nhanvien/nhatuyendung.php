<?php
include '../lib/session.php';
include '../classes/nhatuyendung.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    # code...
} else {
    header("Location:../index.php");
}

$nhatuyendung = new nhatuyendung();
$list = $nhatuyendung->getAllAdmin((isset($_GET['page']) ? $_GET['page'] : 1));
$phantrangnhatuyendung = $nhatuyendung->phantrang();
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
    <title>Danh sách nhà tuyển dụng</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-plus"></i>
        </label>
       <label class="logo"><a href="/../nhanvien">Trang chủ</a></label>
        <ul>
            <li><a href="ungvien.php">Quản lý ứng viên</a></li>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php" class="active">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Danh sách nhà tuyển dụng</h1>
    </div>
    <div class="addNew">
        <a href="themnhatuyendung.php">Thêm mới nhà tuyển dụng</a>
    </div>
    <div class="container">
        <?php $count = 1;
        if ($list) { ?>
            <table class="list">
                <tr>
                    <th>STT</th>
                    <th>Tên công ty</th>
                    <th>Thư điện tử</th>
                    <th>Mật khẩu</th>
                    <th>Tên người liên hệ</th>
                    <th>Số điện thoại</th>
                    <th>Mã số thuế</th>
                    <th>Địa chỉ</th>
                    <th>Mã lĩnh vực</th>
                    <th>Mã phường xã</th>
                    <th>Thao tác</th>
                </tr>
                <?php foreach ($list as $key => $value) { ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><?= $value['tenCongTy'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['matKhau'] ?></td>
                        <td><?= $value['tenNguoiLienHe'] ?></td>
                        <td><?= $value['soDienThoai'] ?></td>
                        <td><?= $value['maSoThue'] ?></td>
                        <td><?= $value['diaChi'] ?></td>
                        <td><?= $value['tenLV'] ?></td>
                        <td><?= $value['maPX'] ?></td>
                        <td>
                            <form><a href="suanhatuyendung.php?maNhaTuyenDung=<?= $value['maNhaTuyenDung'] ?>">Sửa</a>
                            </form>
                            <form >
                                <a href="xoanhatuyendung.php?maNhaTuyenDung=<?= $value['maNhaTuyenDung'] ?>">Xóa</a>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h3>Chưa có nhà tuyển dụng nào ...</h3>
        <?php } ?>
        <div class="pagination">
            <a href="nhatuyendung.php?page=<?= (isset($_GET['page'])) ? (($_GET['page'] <= 1) ? 1 : $_GET['page'] - 1) : 1 ?>">&laquo;</a>
            <?php
            for ($i = 1; $i <= $phantrangnhatuyendung; $i++) {
                if (isset($_GET['page'])) {
                    if ($i == $_GET['page']) { ?>
                        <a class="active" href="nhatuyendung.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php } else { ?>
                        <a href="nhatuyendung.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php  }
                } else {
                    if ($i == 1) { ?>
                        <a class="active" href="nhatuyendung.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php  } else { ?>
                        <a href="nhatuyendung.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php   } ?>
                <?php  } ?>
            <?php }
            ?>
            <a href="nhatuyendung.php?page=<?= (isset($_GET['page'])) ? $_GET['page'] + 1 : 2 ?>">&raquo;</a>
        </div>
    </div>
    </div>
<?php include 'footer.php' ?>
</body>

</html>