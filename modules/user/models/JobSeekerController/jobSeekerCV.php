<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>Hoạt động</title>
    <link rel="stylesheet" href="css/done.css">
</head>
<body>
    <!-- Navigation -->
    <?php
        include 'header.php';
    ?>
    <!-- Controler menu -->
    <div class="center_page">
        <div class="mt-12 justify-content-md-left">
            <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                <h4 class="ml-2">Nộp hồ sơ ứng tuyển</h4>
                <hr class="line1">
                <div class="row col-md-12">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="">
                                <option selected>Tất cả các ngành nghề</option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="">
                                <option selected>Tất cả các lĩnh vực công ty</option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="">
                                <option selected>Tất cả các địa điểm</option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6 font-weight-bold">
                    <label for="khuvuc">Vị trí công việc đang ứng tuyển</label>
                    <select class="form-control" id="">
                        <option selected>Business Analyst</option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div>
                    <p class="ml-2"><i>Bạn đã có hồ sơ trực tuyến đã tạo từ website</i></p>
                    <h5 class="ml-2 font-weight-bold">Chọn hình thức nộp hồ sơ ứng tuyển</h5>
                    <div class="form-check ml-3 mt-3 font-weight-bold">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Hồ sơ trực tuyến(trên website)
                        </label>
                    </div>
                    <div class="row col-12 mt-3">
                        <div class="col-md-3">
                            <div class="form-check mt-3 font-weight-bold">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Tải hồ sơ từ máy tính của bạn
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-save font-weight-bold">Nộp hồ sơ</button>
            </form>   
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