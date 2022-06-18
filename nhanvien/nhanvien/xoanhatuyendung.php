<?php
$conn = mysqli_connect('localhost','root','','gioithieuvieclam');

$maNhaTuyenDung= $_GET['maNhaTuyenDung'];

mysqli_query($conn,"DELETE FROM tblnhatuyendung WHERE maNhaTuyenDung = $maNhaTuyenDung");

header('location: nhatuyendung.php');

?>