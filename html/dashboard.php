<?php 
    session_start();

    if(!isset($_COOKIE["user_email"]) && !isset($_COOKIE["user_photo_url"])){
        header("Location: ./login.php");
        exit();
    }

    if(!isset($_SESSION["email"]) && !isset($_SESSION["photo_url"])) {
        $_SESSION["email"] = $_COOKIE["user_email"];
        $_SESSION["photo_url"] = $_COOKIE["user_photo_url"];
    }
    $url = $_SESSION["photo_url"];
    $email = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
    <head>
        <title>Belle Epoque</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Boris Rose">
        <meta name="description" content="Belle Epoque est une application de restaurant gastronomique qui vous permet de réserver des plats à emporter">
        <meta name="keywords" content="Belle Epoque, Gastronomie française, Restauration, Plats à emporter">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Belle Epoque">
        <meta property="og:description" content="Belle Epoque est une application de restaurant gastronomique qui vous permet de réserver des plats à emporter">
        <meta property="og:type" content="website">
        <meta property="og:image" content="./assets/logo.jpg">
        <link rel="icon" href="../assets/images/logo.jpg" type="image/jpg">
        <link rel="stylesheet" href="../css/styles.css">
        <script src="https://kit.fontawesome.com/1b1fa6fbda.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header class="app-header login-header">
    <a href="/" class="app-header__figure-and-title">
        <figure>
            <img src="../assets/images/logo.jpg" alt="logo de notre application">
        </figure>
        <span aria-label="Nom de l'application">Belle Epoque</span>
    </a>
    <nav class="app-header__nav">
        <ul>
            <li>
                <a href="./menu.html">
                    <span class="desktop-navlink-span" aria-label="text du lien vers la page du menu">Menu</span>
                    <span class="mobile-navlink-span" aria-label="icône représentant un livre ou le menu">
                        <i class="fa-solid fa-book"></i>
                    </span>
                </a> 
            </li>

            <li>
                <a href="./profile.php">
                    <span class="desktop-navlink-span" aria-label="texte du lien vers la page de profil">Profil</span>
                    <span class="mobile-navlink-span" aria-label="icône représentant un utilisateur">
                        <i class="fa-solid fa-user"></i>
                    </span>
                </a> 
            </li>
        </ul>
    </nav>
    </header>
        <main class="app__main dashboard__main">
            <?php 
                if(isset($url)) {
            ?>

            <figure>
                <img src=<?php echo $url ?> alt="photo de profil" >
            </figure>

            <?php } ?>
        </main>
        <?php include "../partials/footer.php" ?>
    </body>
</html>