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
        <form class="d-flex mb-3" method="post">
            <input class="form-control me-2" type="search" name="searchBar" placeholder="Rechercher l'auteur ou le titre d'une musique." aria-label="Search">
            <button class="btn btn-outline-success" name="search" type="search">Search</button>
        </form>
        <div class="d-flex justify-content-center align-item-center">
            <form class="d-flex mb-3 me-3" method="post">
                <button class="btn btn-outline-dark" name="rap" type="search">Rap</button>
            </form>
            <form class="d-flex mb-3 me-3" method="post">
                <button class="btn btn-outline-dark" name="hip_hop" type="search">Hip Hop</button>
            </form>
            <form class="d-flex mb-3 me-3" method="post">
                <button class="btn btn-outline-dark" name="rock" type="search">Rock</button>
            </form>
        </div>
        <?php if (isset($_REQUEST['search']) && $search != "") : ?>
            <h1>Voici les résultats de votre recherche pour <strong><?php echo $search; ?></strong> : </h1>
            <div class="row">
                <?php foreach ($stmt12 as $i) : ?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title"><?php echo $i['auteur']; ?></h5>
                                <h5 class="card-title"><?php echo $i['titre']; ?></h5>
                                <audio controls>
                                    <source src="<?php echo $i['audio']; ?>" type="audio/mp3">
                                </audio>
                                <a href="<?php echo $i['lien']; ?>" target="_blank">Lien youtube</a>
                                <div class="d-flex mt-2 justify-content-center align-items-center">
                                    <a href="editUsers.php?id=<?php echo $i['id_music']; ?>" class="btn btn-light btn-sm me-2">Edit</a>
                                    <form>
                                        <input type="text" hidden name="idd" value="<?php echo $i['id_music']; ?>">
                                        <button class="btn btn-danger btn-sm ml-2" name="audioDelete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
        <?php endif; ?>
        <?php if (isset($_REQUEST['rap'])) : ?>
            <h1>Voici les résultats de votre recherche pour <strong>Rap</strong> : </h1>
            <div class=" row">
                <?php foreach ($stmt13 as $i) : ?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title"><?php echo $i['auteur']; ?></h5>
                                <h5 class="card-title"><?php echo $i['titre']; ?></h5>
                                <audio controls>
                                    <source src="<?php echo $i['audio']; ?>" type="audio/mp3">
                                </audio>
                                <a href="<?php echo $i['lien']; ?>" target="_blank">Lien youtube</a>
                                <div class="d-flex mt-2 justify-content-center align-items-center">
                                    <a href="editAudio.php?id=<?php echo $i['id_music']; ?>" class="btn btn-light btn-sm me-2">Edit</a>
                                    <form>
                                        <input type="text" hidden name="idd" value="<?php echo $i['id_music']; ?>">
                                        <button class="btn btn-danger btn-sm ml-2" name="audioDelete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
        <?php endif; ?>
        <?php if (isset($_REQUEST['hip_hop'])) : ?>
            <h1>Voici les résultats de votre recherche pour <strong>Hip Hop</strong> : </h1>
            <div class="row">
                <?php foreach ($stmt14 as $i) : ?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title"><?php echo $i['auteur']; ?></h5>
                                <h5 class="card-title"><?php echo $i['titre']; ?></h5>
                                <audio controls>
                                    <source src="<?php echo $i['audio']; ?>" type="audio/mp3">
                                </audio>
                                <a href="<?php echo $i['lien']; ?>" target="_blank">Lien youtube</a>
                                <div class="d-flex mt-2 justify-content-center align-items-center">
                                    <a href="editAudio.php?id=<?php echo $i['id_music']; ?>" class="btn btn-light btn-sm me-2">Edit</a>
                                    <form>
                                        <input type="text" hidden name="idd" value="<?php echo $i['id_music']; ?>">
                                        <button class="btn btn-danger btn-sm ml-2" name="audioDelete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
        <?php endif; ?>
        <?php if (isset($_REQUEST['rock'])) : ?>
            <h1>Voici les résultats de votre recherche pour <strong>Rock</strong> : </h1>
            <div class="row">
                <?php foreach ($stmt15 as $i) : ?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title"><?php echo $i['auteur']; ?></h5>
                                <h5 class="card-title"><?php echo $i['titre']; ?></h5>
                                <a href="<?php echo $i['lien']; ?>" target="_blank">Lien youtube</a>
                                <div class="d-flex mt-2 justify-content-center align-items-center">
                                    <a href="editAudio.php?id=<?php echo $i['id_music']; ?>" class="btn btn-light btn-sm me-2">Edit</a>
                                    <form>
                                        <input type="text" hidden name="idd" value="<?php echo $i['id_music']; ?>">
                                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
        <?php endif; ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>