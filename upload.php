<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Blog | Main</title>
</head>

<body>
    <div class="container mt-5">
        <?php include(__DIR__ . '/global/header.php'); ?>
        <?php
        if (isset($_POST['save_audio']) && $_POST['save_audio'] == 'upload audio') {
            var_dump($_FILES['audioFile']['error']);
            $dir =  '/home/idunno/Documents/Projets-Simplon/php/music/upload/';
            $audio_path = $dir . basename($_FILES['audioFile']['name']);

            if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
                echo "uploaded successfully";
            } else {
                echo "error bitch";
            }
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>