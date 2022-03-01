<?php include('variables.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Blog | Index</title>
</head>

<body>
    <div class="container mt-5">
        <?php include(__DIR__ . '/global/header.php'); ?>
        <div class="row">
            <?php foreach ($stmt20 as $i) : ?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title"><?php echo $i['email']; ?></h5>
                            <h5 class="card-title"><?php echo $i['pseudo']; ?></h5>
                            <h5 class="card-text"><?php echo $i['age']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>