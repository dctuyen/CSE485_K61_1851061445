<?php
require_once 'config/db.php';

class ProjectModel
{
    private $maduan;
    private $tenduan;
    private $namthuchien;
    private $linhvuc;
    private $nhiemvu;
    private $coquanthuchien;

    public function getAllProjects()
    {
        $conn = $this->connectDb();
        $sql = "SELECT * FROM duan";
        $result = mysqli_query($conn, $sql);
        $arr_projects = [];
        if (mysqli_num_rows($result) > 0) {
            $arr_projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        return $arr_projects;
    }

    public function connectDb()
    {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " . mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null)
    {
        mysqli_close($connection);
    }
    public function deleteProject($id) {
        $conn = $this->connectDb();
        $sql = "DELETE FROM duan WHERE maduan = ". $id . "";
        if (mysqli_query($conn, $sql)) {
            $this->closeDb($conn);
            return true;
        }
        $this->closeDb($conn);
        return false;
    }
}
