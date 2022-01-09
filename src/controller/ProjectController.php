<?php
require_once 'model/Project.php';
class ProjectController
{
    function index()
    {
        $projectModel = new ProjectModel();
        $projects = $projectModel->getAllProjects();
        require_once 'views/project/index.php';
    }

    function add()
    {
        require_once 'views/project/add.php';

        // Tôi sẽ cần gọi ProjectModel để truy vấn dữ liệu

        // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra ProjectView/add.php tương ứng
    }

    function edit()
    {
        // Tôi sẽ cần gọi ProjectModel để truy vấn dữ liệu
        require_once 'views/project/edit.php';
        // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra ProjectView/edit.php tương ứng
    }

    function delete()
    {
        $id = $_GET['id'];
        if (!is_numeric($id)) {
            header("Location: ?controller=project&action=index");
        }

        $projectModel = new ProjectModel();
        $doneDelete = $projectModel->deleteProject($id);
        if ($doneDelete) {
            die("xóa thành công");
        } else {
            die("xóa không thành công");
        }
    }
}
