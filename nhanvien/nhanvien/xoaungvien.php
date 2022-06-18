<?php
$conn = mysqli_connect('localhost','root','','gioithieuvieclam');

$IDHS= $_GET['IDHS'];

mysqli_query($conn,"DELETE FROM tblthongtinungvien WHERE IDHS = $IDHS");

header('location: ungvien.php');

?>