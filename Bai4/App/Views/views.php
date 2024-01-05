<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="App/Public/style.css">
    <title>Hiển Thị Danh Sách Sự Kiện</title>
</head>

<body>
<h1 style="text-align: center;">Bảng quản lí sự kiện</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Khach Hang</th>
                <th>Tiêu Đề</th>
                <th>Mô Tả</th>
                <th>Thời Gian Bắt Đầu</th>
                <th>Thời Gian Kết Thúc</th>
                <th>Chi Tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
                <tr>
                    <td>
                        <?= $event['id'] ?>
                    </td>
                    <td>
                        <?= $event['id_users'] ?>
                    </td>
                    <td>
                        <?= $event['title'] ?>
                    </td>
                    <td>
                        <?= $event['description'] ?>
                    </td>
                    <td>
                        <?= $event['start_time'] ?>
                    </td>
                    <td>
                        <?= $event['end_time'] ?>
                    </td>
                    <td><a href="" style="text-decoration: none;">Xem Chi Tiết</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>