<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them moi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include('./views/components/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <h1 class="mb-5">them moi</h1>
                <form action="index.php?act=create" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="">Thumbnail</label>
                        <input type="file" name="thumbnail">
                    </div>
                    <div>
                        <label for="">Instructor</label>
                        <input type="text" name="instructor">
                    </div>
                    <div>
                        <label for="">Duration</label>
                        <input type="number" name="duration">
                    </div>
                    <div>
                        <label for="">Price</label>
                        <input type="number" name="price">
                    </div>
                    <input type="submit" value="THEM MOI" name="them">
                </form>
                
            </ul>
        </div>
    </div>
</body>

</html>
