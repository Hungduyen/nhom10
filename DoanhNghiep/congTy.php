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
                <h4 class="mt-2 ml-4">THÔNG TIN CÔNG TY</h4>
            </div>
        </div>
        <div class="content">
            <div class="navigationBar-slide3">
                <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                    <div class="row col-9 mt-12 justify-content-md-left font-weight-bold col-12">
                        <div class=" col-4">
                            <div class=" col-6 md-1 ml-4">
                                <h5>Logo</h5>
                            </div>
                            <div class="">
                                <img class="d-flex align-self-center mt-3 ml-4 rounded-circle"
                                style="width: 100px; height: 100px;" 
                                src="https://mdbootstrap.com/img/Photos/Others/placeholder7.webp" 
                                alt="Generic placeholder image">
                            </div>
                            <div class=" col-6 md-1 mt-5">
                                <label class="btn btn-secondary ml-2" for="my-file-selector" style="background:#E0E0E0; color: black" >
                                    <input id="my-file-selector" type="file" class="d-none">
                                    Chọn ảnh
                                </label>

                                <!-- <input type="file" class="form-control-file mt-2" id=""> -->
                            </div>
                                
                        </div>
                        <div class="row col-8">
                                <div class="col-7 md-1 mt-10">
                                    <label for="text"class="form-label">Tên công ty</label>
                                    <input type="text-a" class="form-control" id="ten" placeholder="">
                                </div>
                                <div class="col-7 md-1 mt-3">
                                    <label for="text"class="form-label">Giới thiệu công ty</label>
                                    <textarea class="form-control" id="gioithieu" rows="3"></textarea>
                                </div>
                                <div class="col-7 md-1 mt-3">
                                    <label for="text"class="form-label">Hình ảnh giới thiệu công ty</label>
                                    <label class="btn btn-secondary ml-2" for="my-file-selector" style="background:#E0E0E0; color: black">
                                    <input id="my-file-selector" type="file" class="d-none">
                                    Chọn ảnh
                                </label>
                                </div>                          
                        </div>
                    <button type="button" class="btn btn-save mt-5 font-weight-bold ">Lưu thông tin</button>
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