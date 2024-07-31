<?php
require_once "module/ConnectDatabase.php";
$getconect = new connectDatabase();
$getconect = $getconect->connect();
if (isset($_POST['title'])) {
    $name = $_POST['title'];
    $img = "../upload/image/noavata.jpg";
    // $post = $_POST['post'];
    $Address = $_POST['Address'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];

    if ($_FILES['imgInp']['error'] == 0) {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType, $allowtypes)) {
            $file = $_FILES['imgInp']['tmp_name'];
            $img = "../upload/image/" . $_FILES['imgInp']['name'];
            move_uploaded_file($file, $img);
            $img = substr($img, 1);
        } else {
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    require_once "./module/TraveModule.php";
    $travel = new TraveModule();
    $sql = "INSERT INTO place(name, Address, price, contact, img) values('$name', '$Address', '$price',  '$contact', '$img')";
    // echo $sql;
    if (mysqli_query($getconect, $sql))
        echo '<script>alert("Post has been added")</script>';
    else
        echo "ddeos them duoc";
    // echo '<script>window.location="./?select=newposts";</script>';

    // $return = $travel->addPlace(null, $name, $Address, $price, $contact, $img);
    // if (false == true)
    //     echo '<script>alert("Địa điểm đã được thêm")</script>';
    // else
    //     echo '<script>alert("Địa điểm chưa được thêm")</script>';
    // echo '<script>window.location="./?select=travelviewing";</script>';
}
require_once "./views/addTravelView.html";
?>