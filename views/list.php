<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include('./views/components/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <h1 class="mb-5">Danh sách sách</h1>
            <a href="index.php?act=create">Them moi</a>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Cover_image</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Publish_date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($courses as $c) { ?>
                                <tr>
                                    <td><?=$c['id']?></td>
                                    <td><?=$c['name']?></td>
                                    <td><img src="./uploads/<?=$c['thumbnail']?>" alt=""></td>
                                    <td><?=$c['instructor']?></td>
                                    <td><?=$c['duration']?></td>
                                    <td><?=$c['price']?></td>
                                    <td>
                                        <a href="">sua</a>
                                       <a href="index.php?act=delete&id=<?=$c['id']?>" onclick="return confirm('ban co chac chan muon xoa no khong?')">xoa</a>
                                    </td>
                                </tr>
                            <?php }?>
                    </tbody>
                </table>
            </ul>
        </div>
    </div>
</body>

</html>
