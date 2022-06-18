<?php
$conn = mysqli_connect('localhost','root','','gioithieuvieclam');

$maLinhVuc= $_GET['maLinhVuc'];

mysqli_query($conn,"DELETE FROM tbllinhvuc WHERE maLinhVuc = $maLinhVuc");

header('location: linhvuc.php');

?>