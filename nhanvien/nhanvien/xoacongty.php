<?php
$conn = mysqli_connect('localhost','root','','gioithieuvieclam');

$maCongTy= $_GET['maCongTy'];

mysqli_query($conn,"DELETE FROM tblthongtincongty WHERE maCongTy = $maCongTy");

header('location: congty.php');

?>