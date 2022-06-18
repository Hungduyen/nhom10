<?php
include '../lib/session.php';
include '../classes/kynang.php';
Session::checkSession('admin');
$quyen = Session::get('quyen');
if ($quyen == 4) {
    $kynang = new kynang();
    $kynangUpdate = mysqli_fetch_assoc($kynang->getByIdAdmin($_GET['maKN']));
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $result = $kynang->update($_POST, $_FILES);
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
    <title>Chỉnh sửa kỹ năng</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="kynang.php" style="font-size: 24px;">Quay lại trang kỹ năng</a>
        <ul>
            <li><a href="ungvien.php">Quản lý ứng viên</a></li>
            <li><a href="congty.php">Quản lý công ty</a></li>
            <li><a href="nhatuyendung.php">Quản lý nhà tuyển dụng</a></li>
            <li><a href="linhvuc.php">Quản lý lĩnh vực</a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Chỉnh sửa kỹ năng</h1>
    </div>
    <div class="container">
        <?php
        if (isset($result)) {
            echo $result;
        }
        ?>
        <div class="form-add">
           <form action="suakynang.php?maKN=<?= $kynangUpdate['maKN'] ?>" method="post">
                <input type="text" hidden name="maKN" style="display: none;" value="<?= (isset($_GET['maKN']) ? $_GET['maKN'] : $kynangUpdate['maKN']) ?>">
                <label for="tenKN">Tên kỹ năng</label>
                <input type="text" id="tenKN" name="tenKN" placeholder="Tên kỹ năng.." value="<?= $kynangUpdate['tenKN'] ?>">

                <input type="submit" value="Lưu" name="submit">
            </form>
        </div>
    </div>
    </div>
    
<?php include 'footer.php' ?>
</body>

</html>