<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Thông tin công việc</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/menu_DN.css">

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
                <h4 class="mt-2 ml-4">Thông tin công việc</h4>
            </div>
        </div>
        <div class="content">
            <div class="navigationBar-slide4">
                <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                        <div class="row col-12 mt-12 justify-content-md-left font-weight-bold">
                            <div class="row col-6">
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 md-1">
                                        <label  for="text"class="form-label text-bold">Chức danh</label>
                                    </div>
                                    <div class="col-6 md-1">
                                        <input type="text" class="form-control" id="sdt" placeholder="">
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 md-1">
                                        <label for="text"class="form-label">Số lượng cần tuyển</label>                      
                                    </div>
                                    <div class="col-6 md-1 mt-1">
                                        <input type="text" class="form-control" id="slg" placeholder="">
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Cấp bậc</label>                
                                    </div>
                                    <div class="col-6 my-1">                              
                                        <input type="text" class="form-control" id="capbac" placeholder="">
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Mức lương</label>                                  
                                    </div>
                                    <div class="col-6 my-1">                              
                                        <input type="text" class="form-control" id="mucluong" placeholder="">   
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Độ tuổi</label>                              
                                    </div>
                                    <div class="col-6 my-1">                              
                                        <input type="text" class="form-control" id="tuoi" placeholder="">
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Hình thức làm việc</label>
                                    </div>
                                    <div class="col-6 my-1">
                                        <input type="text" class="form-control" id="htlv" placeholder="">
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Giới tính</label>
                                    </div>
                                    <div class="col-6 my-1">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Chọn giới tính</option>
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row col-12 md-1 mt-3">
                                    <div class="col-6 my-1 mt-3">
                                        <label class="mr-sm-2 " for="inlineFormCustomSelect">Địa chỉ làm việc</label>
                                    </div>
                                    <div class="col-6 my-1 mt-3" >
                                        <input type="text" class="form-control" id="diachi" placeholder="">
                                    </div>
                                </div>
                            </div> 
                            <div class="row col-6 ">
                                <div class="row col-10">
                                        <div class="col-9 my-1 mt-3">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Mô tả công việc</label>
                                            <textarea class="form-control" id="mota" rows="3"></textarea>
                                        </div>
                                        <div class="col-9 my-1">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Quyền lợi</label>
                                            <textarea class="form-control" id="quyenloi" rows="3"></textarea>
                                        </div>
                                </div>
                            </div>
                        
                            
                    
                    <h5 class="ml-4 mt-5">Yêu cầu công việc</h5>
                    <hr class="line1 mt-1">
                    <div class="row col-6">
                        <div class="row col-12 md-1 mt-3">
                            <div class="col-6 my-1">
                                <label class="mr-sm-3" for="inlineFormCustomSelect">Kinh nghiệm</label>
                            </div>
                            <div class="col-6 my-1">
                                <input type="text" class="form-control" id="kinhnghiem" placeholder="">
                            </div>
                        </div>
                        <div class="row col-12 md-1 mt-3">
                            <div class="col-6 my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Bằng cấp</label>
                            </div>
                            <div class="col-6 my-1">
                                <input type="text" class="form-control" id="bangcap" placeholder="">
                            </div>
                        </div>
                        <div class="row col-12 md-1 mt-3">
                            <div class="col-6 my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Hạn nộp</label>
                            </div>
                            <div class="col-6 my-1">
                                <input type="text" class="form-control" id="hannop" placeholder="">
                            </div>
                        </div>

                    </div>
                    <div class="row col-6">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Mô tả công việc</label>
                            <textarea class="form-control" id="mota" rows="3"></textarea>
                    </div>
                        
                    </div>
                    <button type="button" class="btn btn-save mt-5 font-weight-bold">Lưu thông tin</button>
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