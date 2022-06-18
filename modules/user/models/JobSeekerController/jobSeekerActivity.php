<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>Hoạt động</title>
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
                <h5 class="ml-2">Hoạt động</h5>
                <hr class="line1">
                <!-- <h7 class="ml-3"><i>Các thông tin cơ bản</i><br></h7> -->
                    <div class="mt-12 justify-content-md-left font-weight-bold">
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                <label for="text"class="form-label text-bold">Tên hoạt động</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="tenclub" placeholder="">
                            </div>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <div class="col-md-3">
                                <label for="text"class="form-label text-bold">Tên nhóm /Club</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="tenclub" placeholder="">
                            </div>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <div class="col-md-3">
                                <label for="text"class="form-label text-bold">Ngày tham gia</label>
                            </div>
                            <div class="col-md-2">
                                <input type="date" class="form-control" id="date_giai" placeholder="">
                            </div>
                        </div>
                        <div class="row form-group col-12 mt-3">
                            <div class="col-md-3">
                                <label for="example">Các hoạt động khác</label>
                            </div>
                            <div class="col-md-9">
                            <textarea class="form-control" id="example" rows="3">Các hoạt động tình nguyện hè, thi thiết kế poster, picnic....</textarea>
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