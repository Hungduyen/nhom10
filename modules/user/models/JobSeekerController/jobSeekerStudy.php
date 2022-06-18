<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>Học vấn</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

</head>
<body>
    <!-- Navigation -->
    <?php include 'header.php';?>
    <!--Navigation-->
    <!-- Controler menu -->
    <div class="page">
        <?php include 'menu.php'; ?>
        <div class="content">
            <div class="navigationBar">
                <h4 class="mt-2 ml-4">Tạo hồ sơ trực tuyến</h4>
            </div>
        </div>
        <div class="content">
            <div class="navigationBar-slide6">
                <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                <h5 class="ml-2">Học vấn</h5>
                <hr class="line1">
                <h7 class="ml-3"><i>Học vấn & Bằng cấp</i><br></h7>
                    <div class="mt-12 ml-3 justify-content-md-center font-weight-bold ">
                        <div class="row mt-3 col-md-12">
                            <div class="form-group col-md-3">
                                <label for="khuvuc">Khu vực</label>
                                <select class="form-control" id="khuvuc">
                                <option>Miền Bắc</option>
                                <option>Miền Trung</option>
                                <option>Miền Nam</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="text"class="form-label">Tỉnh</label>
                                <input type="text" class="form-control" id="tinh" placeholder="">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="khuvuc">Trường Đại học/ Cao đẳng</label>
                            <select class="form-control" id="truong">
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="khuvuc">Chuyên ngành đào tạo</label>
                            <select class="form-control" id="nganh">
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div class="row mt-3 col-md-12">
                            <div class="form-group col-md-3">
                                <label for="khuvuc">Tên bằng cấp</label>
                                <select class="form-control" id="tenbang">
                                <option>Đại học</option>
                                <option>Cao Đẳng</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="text"class="form-label">GPA</label>
                                <input type="Text" class="form-control" id="gpa" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3 col-md-12">
                            <div class="form-group col-md-3">
                                <label for="khuvuc">Loại tốt nghiệp</label>
                                <select class="form-control" id="loaitn">
                                <option>Cử nhân</option>
                                <option>Kỹ sư</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="text"class="form-label">Năm tốt nghiệp</label>
                                <input type="text" class="form-control" name="datepicker" id="datepicker">
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <label for="example">Thành tích đạt được</label>
                            <textarea class="form-control" id="example" rows="2"></textarea>
                        </div>
                        <div class="form-group col-9">
                            <label for="example">Các kỹ năng khác:</label>
                            <textarea class="form-control" id="example" rows="2"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-save mt-3 font-weight-bold">Lưu thông tin</button>
                </form>
            </div>
        </div>
        
    </div>
    <script>
        $(document).ready(function(){
            $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years", 
                minViewMode: "years",
                autoclose:true
            });   
        })
    </script>
    <!-- Controlel menu--> 
    <!-- link_js datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- link_js datepicker -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    
</body>
</html>