<?php 


  function display_message ($custom_message) {
      return $custom_message;
  }



?>


<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
  <head>
    <title>Belle Epoque</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Boris Rose" />
    <meta
      name="description"
      content="Belle Epoque est une application de restaurant gastronomique qui vous permet de réserver des plats à emporter"
    />
    <meta
      name="keywords"
      content="Belle Epoque, Gastronomie française, Restauration, Plats à emporter"
    />
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="Belle Epoque" />
    <meta
      property="og:description"
      content="Belle Epoque est une application de restaurant gastronomique qui vous permet de réserver des plats à emporter"
    />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="./assets/logo.jpg" />
    <link rel="icon" href="./assets/images/logo.jpg" type="image/jpg" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script
      src="https://kit.fontawesome.com/1b1fa6fbda.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="app-header">
      <section class="app-header__figure-and-title">
        <figure>
          <img src="./assets/images/logo.jpg" alt="logo de notre application" />
        </figure>
        <span aria-label="Nom de l'application">Belle Epoque</span>
      </section>
      <nav class="app-header__nav">
        <ul>
          <li>
            <a href="./html/menu.php">
              <span
                class="desktop-navlink-span"
                aria-label="text du lien vers la page du menu"
                >Menu</span
              >
              <span
                class="mobile-navlink-span"
                aria-label="icône représentant un livre ou le menu"
              >
                <i class="fa-solid fa-book"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="./html/login.php">
              <span
                class="desktop-navlink-span"
                aria-label="text du lien vers la page de connexion"
                >Connexion</span
              >
              <span
                class="mobile-navlink-span"
                aria-label="icône représentant une direction vers une porte soit l'icône de connexion"
              >
                <i class="fa-solid fa-right-to-bracket"></i>
              </span>
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <main class="app__main landing__main">
      <figure id="landing-figure">
        <img
          src="./assets/images/logo.jpg"
          alt="logo de l'application Belle Epoque"
        />
      </figure>

      <section class="landing__message-and-navlink">
        <article class="message">
          <section class="message__figure-section">
            <figure>
              <img
                src="./assets/images/info-avatar.jpg"
                alt="image de l'info-avatar de l'application"
              />
            </figure>
          </section>
          <section class="message__content-section">
            <p>
              <?php 
                echo display_message("Bonjour à tous et Bienvenue sur Belle Epoque, le site #1 de la gastronomie à emporter"); 
                echo "<br>".$content;
              ?>
            </p>
          </section>
        </article>
        <a
          href="./html/menu.html"
          id="landing-menu-navlink"
          class="nav-link custom-button"
          >Découvrir notre menu</a
        >
      </section>
    </main>
    <?php include "./partials/footer.php" ?>
  </body>
</html>
