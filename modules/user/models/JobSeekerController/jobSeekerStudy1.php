<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
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
            <div class="navigationBar-slide3">
                <form class=" needs-validation m-auto" style="width: 1200px;" novalidate>
                <h5 class="ml-2">Học vấn</h5>
                <hr class="line1">
                <h7 class="ml-3"><i>Trình độ ngoại ngữ</i><br></h7>
                    <div class="mt-12 ml-3 justify-content-md-center font-weight-bold ">
                        <div class="form-group col-md-4">
                            <label for="khuvuc">Chọn ngôn ngữ</label>
                            <select class="form-control" id="khuvuc">
                                <option>Tiếng Anh</option>
                                <option>Tiếng Nhật</option>
                                <option>Tiếng Trung</option>
                                <option>Tiếng Hàn</option>
                                <option>Tiếng Pháp</option>
                                <option>Tiếng Nga</option>
                            </select>
                            <div class="form-group col-md-auto">
                                <label for="rating-sm-no-border">Nghe</label>
                                    <b-form-rating id="rating-sm-no-border" v-model="value" no-border size="sm"></b-form-rating>
                            </div>
                            <div class="form-group col-md-auto">
                                <label for="rating-lg" class="mt-3">Nói</label>
                                <b-form-rating id="rating-lg" v-model="value" size="lg"></b-form-rating>   
                            </div>
                        </div>
                        
                        <div class="form-group col-9 mt-3">
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
    <script>
        export default {
            data() {
            return {
                value: null
            }
            }
        }
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