<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>Thông tin cá nhân</title>
</head>
<body>
    <!-- Navigation -->
    <?php
        include 'header.php';
    ?>
    <!--Navigation-->
    <!-- Controler menu -->
    <div class="page">
        <?php
            include 'menu.php';
        ?>
        <div class="content">
            <div class="navigationBar">
                <h4 class="mt-2 ml-4">Tạo hồ sơ trực tuyến</h4>
            </div>
        </div>
        <div class="content">
            <div class="navigationBar-slide4">
                <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                <h5 class="ml-2">Thông tin cá nhân</h5>
                <hr class="line1">
                <!-- <h7 class="ml-3"><i>Các thông tin cơ bản</i><br></h7> -->
                    <div class="mt-12 justify-content-md-left font-weight-bold">
                        <div class="row col-md-12">
                            <div class="col-md-5">
                                <label for="text"class="form-label text-bold">Họ và tên</label>
                                <input type="text" class="form-control" id="name" placeholder="">
                            </div>
                            <div class="col-md-5">
                                <label for="text"class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                            </div>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <div class="col-md-3">
                                <label for="text"class="form-label text-bold">Giới tính</label>
                            </div>
                            <div class="col-md-3">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Chọn giới tính</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                </select>
                            </div>
                        </div>
                            <div class="row col-md-12 mt-3">
                                <div class="col-md-3">
                                    <label for="text"class="form-label text-bold">Ngày sinh</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="date_dob" placeholder="">
                                </div>
                            </div>
                        <div class="row col-md-12 mt-3">
                            <div class="col-md-3">
                                <label for="text"class="form-label text-bold">Điện thoại</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="sdt" placeholder="">
                            </div>
                        </div>
                        <p class="mt-3 ml-4">Địa chỉ</p>
                        <div class="row  ml-3 col-md-12 mt-1">
                            <div class="row col-md-6">
                                <div class="col-md-3">
                                    <label for="text"class="form-label text-bold">Số nhà</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="sonha" placeholder="">
                                </div>
                            </div>
                            <div class="row col-md-6 mt-3">
                                <div class="col-md-3">
                                    <label for="text"class="form-label text-bold">Đường</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="duong" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row  ml-3 col-md-12">
                            <div class="row col-md-6 mt-1">
                                <div class="col-md-3">
                                    <label for="text"class="form-label text-bold">Huyện</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="huyen" placeholder="">
                                </div>
                            </div>
                            <div class="row col-md-6 mt-3">
                                <div class="col-md-3">
                                    <label for="text"class="form-label text-bold">Tỉnh</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="tinh" placeholder="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <button type="button" class="btn btn-save mt-3 font-weight-bold">Lưu thông tin</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- Controlel menu--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>