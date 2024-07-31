<?php


class Comment
{
    private $conect;

    public function __construct()
    {
        require_once "ConnectDatabase.php";
        $this->conect = new connectDatabase();
        $this->conect = $this->conect->connect();
    }

    public function getlistComment()
    {
        if (!$this->conect) {
            return false;
        } else {
            $data = array(array());

            $sql = "SELECT * from feedback ";
            $getcmt = mysqli_query($this->conect, $sql);
            if (mysqli_num_rows($getcmt) <= 0) {
                return false;
            } else {
                $dem = 1;
                while ($data2 = mysqli_fetch_assoc($getcmt)) {
                    $data[$dem][1] = $data2['f_id'];
                    $data[$dem][2] = $data2['f_lname'];
                    $data[$dem][3] = $data2['f_email'];
                    $data[$dem][4] = $data2['f_contact'];
                    $data[$dem][5] = $data2['feedback'];
                    $dem++;
                }
            }
            return $data;
        }
        return false;
    }



    public function deleteCommentByID($id, $classify)
    {
        if ($classify == 0)
            $sql = "delete from comment where id = $id";
        else
            $sql = "delete from comment_travelviewing where id = $id";
        echo $sql;
        try {
            mysqli_query($this->conect, $sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
