<?php
require_once "module/ConnectDatabase.php";
$getconect = new connectDatabase();
$conn = $getconect->connect();
$userid = $_REQUEST['userid'];
if (isset($userid)) {
    $conn->xemSinhVien("select * from place where userid='$userid' order by id asc");
}
?>