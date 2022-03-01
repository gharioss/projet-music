<?php session_start(); ?>
<?php
try {
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=music;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}


//register
if (isset($_REQUEST['register'])) {
    $email = $_REQUEST['email'];
    $pseudo = $_REQUEST['pseudo'];
    $pwd = $_REQUEST['password'];
    $age = $_REQUEST['age'];
    $encrypt_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    $stmt5 = $db->prepare("INSERT INTO users (email, password, pseudo, age, statut) VALUES(:email, :password, :pseudo, :age, 'user')");
    $stmt5->bindParam(':email', $email);
    $stmt5->bindParam(':password', $encrypt_pwd);
    $stmt5->bindParam(':pseudo', $pseudo);
    $stmt5->bindParam(':age', $age);
    $stmt5->execute();
    $id = $db->lastInsertId();
    $_SESSION['IS_LOGGED'] = $id;
    $_SESSION['username'] = $pseudo;

    header('Location: main.php');
    exit();
}

//login
if (isset($_REQUEST['login'])) {
    $pseudo = $_REQUEST['pseudo'];
    $pwd = $_REQUEST['password'];

    $stmt6 = $db->prepare("SELECT id_users, pseudo, password, statut FROM users WHERE pseudo = :pseudo");
    $stmt6->bindParam(':pseudo', $pseudo);
    $stmt6->execute();
    $user = $stmt6->fetchAll();

    if (isset($user[0]) && $user[0]["password"] == password_verify($pwd, $user[0]["password"]) && $user[0]["pseudo"] == $pseudo) {
        $_SESSION['IS_LOGGED'] = $user[0]['id_users'];
        $_SESSION['username'] = $pseudo;
        $_SESSION['IS_ADMIN'] = $user[0]['statut'];

        header('Location: main.php');
        exit();
    }
}
if (isset($_REQUEST['search'])) {
    $search = $_REQUEST['searchBar'];

    $stmt12 = $db->prepare("SELECT id_music, auteur, titre, lien, music.id_theme, audio FROM `music` INNER JOIN theme on music.id_theme = theme.id_theme where music.auteur LIKE '$search%' OR music.titre like '$search%'");
    $stmt12->execute();
}
if (isset($_REQUEST['rap'])) {

    $stmt13 = $db->prepare("SELECT id_music, auteur, titre, lien, music.id_theme, audio FROM `music` INNER JOIN theme on music.id_theme = theme.id_theme where theme.theme LIKE 'rap'");
    $stmt13->execute();
}
if (isset($_REQUEST['hip_hop'])) {

    $stmt14 = $db->prepare("SELECT id_music, auteur, titre, lien, music.id_theme, audio FROM `music` INNER JOIN theme on music.id_theme = theme.id_theme where theme.theme LIKE 'hip hop'");
    $stmt14->execute();
}
if (isset($_REQUEST['rock'])) {

    $stmt15 = $db->prepare("SELECT id_music, auteur, titre, lien, music.id_theme, audio FROM `music` INNER JOIN theme on music.id_theme = theme.id_theme where theme.theme LIKE 'rock'");
    $stmt15->execute();
}
if (isset($_REQUEST['save'])) {
    $auteur = $_REQUEST['auteur'];
    $titre = $_REQUEST['titre'];
    $link = $_REQUEST['link'];
    $theme = $_REQUEST['theme'];
    $dir = 'upload/';
    $audio_path = $dir . basename($_FILES['audioFile']['name']);

    if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
        $stmt5 = $db->prepare("INSERT INTO music (auteur, titre, lien, id_theme, audio) VALUES(:auteur, :titre, :lien, :theme, '$audio_path')");
        $stmt5->bindParam(':auteur', $auteur);
        $stmt5->bindParam(':titre', $titre);
        $stmt5->bindParam(':lien', $link);
        $stmt5->bindParam(':theme', $theme);
        $stmt5->execute();

        header('Location: main.php?info="added');
        exit();
    } else {
        echo "error bitch";
    }
}
$stmt16 = $db->prepare("SELECT * FROM users WHERE statut = 'user' ORDER BY id_users DESC");
$stmt16->execute();

$stmt20 = $db->prepare("SELECT * FROM users WHERE statut = 'Admin' ORDER BY id_users DESC");
$stmt20->execute();

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $stmt10 = $db->prepare("SELECT * FROM users WHERE id_users = $id");
    $stmt10->execute();
}
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $stmt21 = $db->prepare("SELECT * FROM music WHERE id_music = $id");
    $stmt21->execute();
}

if (isset($_REQUEST['editUser'])) {
    $id = $_REQUEST['id'];
    $email = $_REQUEST['email'];
    $pseudo = $_REQUEST['pseudo'];
    $pwd = $_REQUEST['password'];
    $age = $_REQUEST['age'];
    $statut = $_REQUEST['statut'];
    $encrypt_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    $stmt11 = $db->prepare("UPDATE users SET email = :email, password = :password, pseudo = :pseudo, age = :age, statut = :statut WHERE id_users = $id");
    $stmt11->bindParam(':email', $email);
    $stmt11->bindParam(':pseudo', $pseudo);
    $stmt11->bindParam(':password', $encrypt_pwd);
    $stmt11->bindParam(':age', $age);
    $stmt11->bindParam(':statut', $statut);
    $stmt11->execute();

    header('Location: users.php?info=updated');
    exit();
}
if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['idd'];

    $stmt3 = $db->prepare("DELETE FROM users WHERE id_users = $id");
    $stmt3->execute();

    header('Location: users.php?info=deleted');
    exit();
}
if (isset($_REQUEST['updateAudio'])) {
    $id = $_REQUEST['id'];
    $auteur = $_REQUEST['auteur'];
    $titre = $_REQUEST['titre'];
    $lien = $_REQUEST['link'];
    $id_theme = $_REQUEST['theme'];
    $dir = 'upload/';
    $audio_path = $dir . basename($_FILES['audioFile']['name']);


    if (move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
        $stmt22 = $db->prepare("UPDATE music SET :auteur = :auteur, titre = :titre, lien = :lien, audio = :audio, id_theme = :id_theme WHERE id_music = '$audio_path'");
        $stmt21->bindParam(':auteur', $auteur);
        $stmt21->bindParam(':titre', $titre);
        $stmt21->bindParam(':lien', $lien);
        $stmt21->bindParam(':id_theme', $id_theme);

        header('Location: main.php?info=updated');
        exit();
    }
}
if (isset($_REQUEST['audioDelete'])) {
    $id = $_REQUEST['idd'];

    $stmt3 = $db->prepare("DELETE FROM music WHERE id_music = $id");
    $stmt3->execute();

    header('Location: main.php?info=deleted');
    exit();
}
