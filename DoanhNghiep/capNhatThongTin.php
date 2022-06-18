<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head_DN.php';?>
</head>
<body>
    <!-- Navigation -->
    <?php
        include 'header_DN.php';
    ?>
    <!--Navigation-->
    <!-- Controler menu -->
    <div class="page">
        <?php
            include 'menu_DN.php';
        ?>
        <div class="content">
            <div class="navigationBar">
                <h4 class="mt-2 ml-4">CẬP NHẬT THÔNG TIN</h4>
            </div>
        </div>
        <div class="content">
            <div class="navigationBar-slide1">
                <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                    <div class="row col-12 mt-12 justify-content-md-left font-weight-bold">
                        <div class="row col-6 ">
                            <h5 class="ml-2">THÔNG TIN ĐĂNG NHẬP</h5> 
                            <div class="col-8 md-1">
                                    <label for="text"class="form-label text-bold">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="col-8 md-1">
                                    <label for="text"class="form-label">Mật khẩu</label>
                                    <input type="text" class="form-control" id="matkhau" placeholder="">
                            </div>
                            <div class="col-8 md-1">
                                    <label for="text"class="form-label">Nhập lại mật khẩu</label>
                                    <input type="text" class="form-control" id="matkhau" placeholder="">
                            </div>
                        </div>
                    <div class="row col-6">
                        <h5 class="ml-2">THÔNG TIN LIÊN HỆ</h5> 
                        
                        <div class="col-8 my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Tên người liên hệ</label>
                            <input type="text" class="form-control" id="ten" placeholder="">
                        </div>
                        <div class="col-8 my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Email liên hệ</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="col-8 my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Số điện thoại liên hệ</label>
                            <input type="text" class="form-control" id="sdt" placeholder="">
                        </div>
                    </div>
                    <div class="row col-6">
                        <h5 class="ml-2 mt-5">THÔNG TIN CÔNG TY</h5> 
                        
                        <div class="col-8 my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Tên Công ty</label>
                            <input type="text" class="form-control" id="tenCT" placeholder="">
                        </div>
                        <div class="col-8 my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Mã số thuế</label>
                            <input type="text" class="form-control" id="thue" placeholder="">
                        </div>
                        <div class="col-8 my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Địa chỉ công ty</label>
                            <input type="text" class="form-control" id="diachi" placeholder="">
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