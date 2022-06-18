<?php
$conn = mysqli_connect('localhost','root','','gioithieuvieclam');

$maKN= $_GET['maKN'];

mysqli_query($conn,"DELETE FROM tblkynang WHERE maKN = $maKN");

header('location: kynang.php');

?>