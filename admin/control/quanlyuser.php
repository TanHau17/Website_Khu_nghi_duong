<?php
$getid = $_GET['id'];
require_once "module/ConnectDatabase.php";
$getconect = new connectDatabase();
$conn = $getconect->connect();
$sql = "SELECT * FROM user where userid= $getid";
$t = mysqli_query($conn, $sql);
$getdata = mysqli_fetch_assoc(mysqli_query($conn, $sql));

if (isset($_POST['name'])) {
    $email = $_POST['emaill'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phonenumber = $_POST['mobno'];
    $pass = $_POST['pass'];
    require_once "module/UserModule.php";
    $usermodule = new UserModule();
    $usermodule->editUserInformation($name, $address, $email, $pass, $phonenumber, $getid);
    echo '<script>window.location="./?select=UserManagement";</script>';
}


require_once "./views/editUserView.html";
?>