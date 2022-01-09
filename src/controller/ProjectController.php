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
    }
}
