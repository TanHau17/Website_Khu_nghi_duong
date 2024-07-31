<?php
require_once "module/ConnectDatabase.php";
$getconect = new connectDatabase();
$getconect = $getconect->connect();
$getid = $_GET['id'];
$sql = "SELECT * FROM place WHERE id = $getid";
$getData = mysqli_fetch_assoc(mysqli_query($getconect, $sql));

if (isset($_POST['title'])) {
    $name = $_POST['title'];
    $img = "../upload/image/noavata.jpg";
    $Address = $_POST['Address'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];

    if($_FILES['imgInp']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp']['tmp_name'];
            $img = "../upload/image/".$_FILES['imgInp']['name'];
            move_uploaded_file($file, $img);
            $img = substr($img, 1);
            $sql = "UPDATE place SET img='$img' where  id=$getid";
            mysqli_query($getconect, $sql);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    require_once "module/TraveModule.php";
    $travelmudule  = new TraveModule();
    $return  = $travelmudule -> editTravel($name, $Address, $price, $contact, $getid);
    if($return) echo '<script>alert("Chỉnh sửa hoàn thành")</script>';
    else  echo '<script>alert("Chỉnh sửa không thành công")</script>';
//    echo '<script>window.location="./?select=travelviewingMana";</script>';
}
require_once "./views/editTravelView.html"
?>