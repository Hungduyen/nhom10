<?php
include '../lib/session.php';
include '../classes/congty.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    # code...
} else {
    header("Location:../index.php");
}
$congty = new congty();
$list = $congty->getAllAdmin((isset($_GET['page']) ? $_GET['page'] : 1));
$phantrangcongty = $congty->phantrang();
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
    <title>Danh sách công ty</title>
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
            <li><a href="congty.php" class="active">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Danh sách công ty</h1>
    </div>
    <div class="addNew">
        <a href="themcongty.php">Thêm mới công ty</a>
    </div>
    <div class="container">
        <?php $count = 1;
        if ($list) { ?>
            <table class="list">
                <tr>
                    <th>STT</th>
                    <th>Logo công ty</th>
                    <th>Nội dung giới thiệu</th>
                    <th>Nhà tuyển dụng</th>
                    <th>Thao tác</th>
                </tr>
                <?php foreach ($list as $key => $value) { ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><img class="image-cart" src="uploads/<?= $value['logo'] ?>" alt=""></td>
                        <td><?= $value['noiDungGioiThieu'] ?></td>
                        <td><?= $value['tenCT'] ?></td>


                        <td>
                            <form><a href="suacongty.php?maCongTy=<?= $value['maCongTy'] ?>">Sửa</a></form><form >
                                <a href="xoacongty.php?maCongTy=<?= $value['maCongTy'] ?>">Xóa</a>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h3>Chưa có công ty nào nào...</h3>
        <?php } ?>
        <div class="pagination">
            <a href="congty.php?page=<?= (isset($_GET['page'])) ? (($_GET['page'] <= 1) ? 1 : $_GET['page'] - 1) : 1 ?>">&laquo;</a>
            <?php
            for ($i = 1; $i <= $phantrangcongty; $i++) {
                if (isset($_GET['page'])) {
                    if ($i == $_GET['page']) { ?>
                        <a class="active" href="congty.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php } else { ?>
                        <a href="congty.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php  }
                } else { ?>
                    <a href="congty.php?page=<?= $i ?>"><?= $i ?></a>
                <?php  } ?>
            <?php }
            ?>
            <a href="congty.php?page=<?= (isset($_GET['page'])) ? $_GET['page'] + 1 : 2 ?>">&raquo;</a>
        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>