<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>Kỹ năng</title>
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
            <div class="navigationBar-slide2">
                <form class="needs-validation m-auto" style="width: 1200px;" novalidate>
                <h5 class="ml-2">Kỹ năng</h5>
                <hr class="line1">
                <p><i>Đánh dấu chọn các kỹ năng mềm hoặc sở trường</i></p>
                <div class="justify-content-md-left">
                    <div class="form-check ml-3 font-weight-bold">
                        <div class="form-check ml-3">
                            <input type="checkbox" value="kn1"> Kỹ năng giao tiếp      
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn2"> Kỹ năng làm việc nhóm                          
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn3"> Kỹ năng tư duy và phản biện    
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn4"> Kỹ năng lãnh đạo                          
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn5"> Kỹ năng thích nghi       
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn6"> Kỹ năng sắp xếp và lập kế hoạch                           
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn7"> Kỹ năng giải quyết vấn đề    
                        </div>
                        <div class="form-check mt-3 ml-3">
                            <input  type="checkbox" value="kn8"> Kỹ năng tư duy sáng tạo
                        </div>
                    <div class="form-group col-12 mt-3">
                        <label for="example">Các kỹ năng khác:</label>
                        <textarea class="form-control" id="example" rows="2"></textarea>
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