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
        <?php foreach ($stmt10 as $i) : ?>
            <form method="POST">
                <input type="text" hidden name="id" value="<?php echo $i['id_users']; ?>">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="md-form" style="width: 50%;">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" aria-describedly="email-help" placeholder="you@exemple.com" value="<?php echo $i['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="pseudo" class="form-label">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" value="<?php echo $i['pseudo']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Âge</label>
                            <input type="number" class="form-control" name="age" value="<?php echo $i['age']; ?>">
                        </div>
                        <div class="mb-3">
                            <select class="custom-select my-1 mr-sm-2" name="statut">
                                <option selected>User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <button name="editUser" class="btn btn-dark">Modifier cet utilisateur ?</button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>