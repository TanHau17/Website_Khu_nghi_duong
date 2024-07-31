<?php


class TraveModule
{
    private $getconect;
    private $conect = false;
    function __construct()
    {
        require_once "ConnectDatabase.php";
        $this->getconect = new connectDatabase();
        $this->conect = $this->getconect->connect();
    }
    public function DeleteByID($id)
    {
        if (!$this->getconect) {
            return false;
        }
        try {
            $sql = "delete from place where id = $id";
            echo $sql;
            mysqli_query($this->conect, $sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function deleteCommentById($id)
    {

    }

    public function addPlace($id, $name, $Address, $price, $contact, $img)
    {
        if (!$this->getconect) {
            return false;
        }
        try {
            $sql = "INSERT INTO place values(null,'$name', '$Address','$price', '$contact', '$img')";
            // echo $sql;
            mysqli_query($this->conect, $sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
        return false;
    }

    public function editTravel($name, $address, $price, $contact, $getid)
    {
        if (!$this->getconect) {
            return false;
        }
        try {
            $sql = "UPDATE place SET name = '$name', Address = '$address', price = '$price', contact = '$contact' where id = '$getid'";
            mysqli_query($this->conect, $sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
        return false;
    }
}