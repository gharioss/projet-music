<nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <h1><a class="nav-link" aria-current="page" href="./main.php">Musiques</a></h1>

                </li>
            </ul>
            <ul class="navbar-nav">
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <?php if ($_SESSION['IS_ADMIN'] == "Admin") : ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./upload_music.php">Enregister une musique</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Utilisateurs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./users.php">Liste</a></li>
                                <li><a class="dropdown-item" href="./createUser.php">Créer un nouvel utilisateur</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./admin.php">Liste des Admins</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="global/logout.php">Se déconnecter</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>