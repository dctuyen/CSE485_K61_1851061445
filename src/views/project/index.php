<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TuyenDC - Kiểm tra MVC</title>
</head>

<body>

<div class="container">
<h1>Danh sách dự án khí tượng</h1>

    <table class="table table-hover rounded">
        <thead>
            <tr>
                <th scope="col">Mã dự án</th>
                <th scope="col">Tên dự án</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Lĩnh vực</th>
                <th scope="col">Nhiệm vụ</th>
                <th scope="col">Cơ quan thực hiện</th>
                <th scope="col">Thao tác</th>
                <th scope="col">Thao tác</th>

            </tr>
        </thead>
        <tbody>
        <?php
        foreach($projects as $project){
            echo '
            <tr>
                <th scope="row">' . $project['maduan'] . '</th>
                <td>' . $project['tenduan'] . '</td>
                <td>' . $project['namthuchien'] . '</td>
                <td>' . $project['linhvuc'] . '</td>
                <td>' . $project['nhiemvu'] . '</td>
                <td>' . $project['coquanthuchien'] . '</td>
                <td>' . $project['coquanthuchien'] . '</td>
                <td><a href="index.php?controller=project&action=edit&id=' . $project['maduan'] . '" class="btn btn-warning" '. $project['maduan'] .'>Sửa</a></td>
                <td><a class="btn btn-danger" '. $project['maduan'] .'>Xóa</a></td>

            </tr>';
        }
        ?>
            </tbody>
    </table>
    <a class="btn btn-success" href="index.php?controller=project&action=add">Thêm dự án</a>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>