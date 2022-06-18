<?php
include '../lib/session.php';
include '../classes/kynang.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    # code...
} else {
    header("Location:../index.php");
}

$kynang = new kynang();
$list = $kynang->getAllKynang((isset($_GET['page']) ? $_GET['page'] : 1));
$pageCount = $kynang->phantrang();
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
    <title>Danh sách kỹ năng</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="/../nhanvien">Trang chủ</a></label>
        <ul>
            <li><a href="ungvien.php">Quản lý ứng viên</a></li>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="kynang.php" class="active">Quản lý kỹ năng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Danh sách kỹ năng</h1>
    </div>
    <div class="addNew">
        <a href="themkynang.php">Thêm kỹ năng</a>
    </div>
    <div class="container">
        <?php $count = 1;
        if ($list) { ?>
            <table class="list">
                <tr>
                    <th>STT</th>
                    <th>Tên kỹ năng</th>
                    <th>Thao tác</th>
                </tr>
                <?php foreach ($list as $key => $value) { ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><?= $value['tenKN'] ?></td>
                        <td>
                            <form >
                            <a href="suakynang.php?maKN=<?= $value['maKN'] ?>">
                            Sửa</a>
                        </form >
                            <form >
                                <a href="xoakynang.php?maKN=<?= $value['maKN'] ?>">Xóa</a>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h3>Chưa có kỹ năng nào...</h3>
        <?php } ?>
        <div class="pagination">
            <a href="kynang.php?page=<?= (isset($_GET['page'])) ? (($_GET['page'] <= 1) ? 1 : $_GET['page'] - 1) : 1 ?>">&laquo;</a>
            <?php
            for ($i = 1; $i <= $pageCount; $i++) {
                if (isset($_GET['page'])) {
                    if ($i == $_GET['page']) { ?>
                        <a class="active" href="kynang.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php } else { ?>
                        <a href="kynang.php?page=<?= $i ?>"><?= $i ?></a>
                    <?php  }
                } else { ?>
                    <a href="kynang.php?page=<?= $i ?>"><?= $i ?></a>
                <?php  } ?>
            <?php }
            ?>
            <a href="kynang.php?page=<?= (isset($_GET['page'])) ? $_GET['page'] + 1 : 2 ?>">&raquo;</a>
        </div>
    </div>
    </div>
    
<?php include 'footer.php' ?>
</body>

</html>