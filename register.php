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

    <div class="container mt-5" style="height: 100vw;">
        <div class="text-center">
            <a href="index.php" class="btn btn-outline-dark" id="loginBtn">+ Login</a>
            <a href="" class="btn btn-dark" id="registerBtn">+ Register</a>
        </div>
        <form method="POST">
            <div class="d-flex justify-content-center align-items-center">
                <div class="md-form" style="width: 50%;">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedly="email-help" placeholder="you@exemple.com">
                    </div>
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" name="pseudo">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Âge</label>
                        <input type="number" class="form-control" name="age">
                    </div>
                    <button name="register" class="btn btn-dark">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>