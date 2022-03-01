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
        <div class="text-center">
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="d-flex justify-content-center align-items-center">
                <div class="md-form" style="width: 50%;">
                    <div class="mb-3">
                        <label for="text" class="form-label">Auteur</label>
                        <input type="text" class="form-control" name="auteur">
                    </div>
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Ajouter un lien</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                    <div class="mb-3">
                        <input type="file" name="audioFile">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <select class="custom-select" name="theme">
                                <option selected>Themes</option>
                                <option value="1">Rap</option>
                                <option value="2">Hip Hop</option>
                                <option value="3">Rock</option>
                            </select>
                        </div>
                    </div>
                    <button name="save" class="btn btn-dark">Enregister cette musique</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>