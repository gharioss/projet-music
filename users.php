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
        <?php if (isset($_REQUEST['info'])) : ?>
            <?php if ($_REQUEST['info'] == 'added') : ?>
                <div class="alert alert-success" role="alert">
                    This user has been added successfully !
                </div>
            <?php elseif ($_REQUEST['info'] == 'updated') : ?>
                <div class="alert alert-success" role="alert">
                    This user has been updated successfully !
                </div>
            <?php elseif ($_REQUEST['info'] == 'deleted') : ?>
                <div class="alert alert-danger" role="alert">
                    This user has been deleted !
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="row">
            <?php foreach ($stmt16 as $i) : ?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title"><?php echo $i['email']; ?></h5>
                            <h5 class="card-title"><?php echo $i['pseudo']; ?></h5>
                            <h5 class="card-text"><?php echo $i['age']; ?></h5>
                            <div class="d-flex mt-2 justify-content-center align-items-center">
                                <a href="editUsers.php?id=<?php echo $i['id_users']; ?>" class="btn btn-light btn-sm me-2">Edit</a>
                                <form>
                                    <input type="text" hidden name="idd" value="<?php echo $i['id_users']; ?>">
                                    <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>