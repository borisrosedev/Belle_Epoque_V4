<?php 

    $starters = [
        [
            "url" => "https://cdn.pixabay.com/photo/2016/11/18/19/00/bread-1836411_1280.jpg",
            "name" => "Toast à l'oeuf",
            "price" => 13.00
        ],
        [
            "url" => "https://cdn.pixabay.com/photo/2020/10/01/22/39/gourmet-5619887_1280.jpg",
            "name" => "Bruschetta au four à l'Italienne",
            "price" => 16.00
        ],
        [
            "url" => "https://cdn.pixabay.com/photo/2018/08/29/19/01/fig-3640553_1280.jpg",
            "name" => "Toast au fromage et fruit du dragon",
            "price" => 14.00
        ]

    ]


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
        <header class="app-header menu-header">
            <a href="/" class="app-header__figure-and-title">
                <figure>
                    <img src="../assets/images/logo.jpg" alt="logo de notre application">
                </figure>
                <span aria-label="Nom de l'application">Belle Epoque</span>
            </a>
            <nav class="app-header__nav">
                <ul>
                    <li>
                        <a href="/">
                            <span class="desktop-navlink-span" aria-label="text du lien vers la page d'accueil">Accueil</span>
                            <span class="mobile-navlink-span"  aria-label="icône représentant un maison ou l'accueil">
                                <i class="fa-solid fa-house"></i>
                            </span>
                        </a>
                   
                    </li>

                    <li>
                        <a href="./login.html">
                            <span class="desktop-navlink-span" aria-label="text du lien vers la page de connexion">Connexion</span>
                            <span class="mobile-navlink-span" aria-label="icône représentant une direction vers une porte soit l'icône de connexion">
                                <i class="fa-solid fa-right-to-bracket"></i>
                            </span>
                        </a> 
                    </li>
                </ul>
            </nav>
        </header>
        <main class="app__main menu__main">
            <section class="menu__title-section">
                <h1>Notre Menu</h1>
            </section>
            <section class="menu__menu-content-section">
                <section class="menu__title-and-items-section">
                    <header>
                        <h2>Entrées</h2>
                    </header>
                    <ul class="menu__items-list">

                    <?php 
                        for($i = 0 ; $i < 3 ; $i++) {
                    ?>
                        <li class="menu__list-item">
                            <section class="menu-list-item__figure-section">
                                <figure>
                                    <img src=<?php echo $starters[$i]["url"] ?> alt="image de <?php echo $starters[$i]["name"] ?>">
                                </figure>
                            </section>
                            <section class="menu-list-item__info-and-actions-section">
                                <section class="menu-list-item__info-section">
                                    <h3><?php echo $starters[$i]["name"] ?></h3>
                                    <span aria-label="prix du produit"><?php echo $starters[$i]["price"] ?>€</span>
                                </section>
                                <section class="menu-list-item__actions-section">
                                    <button type="button">
                                        <span aria-label="icône d'ajout au panier">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </span>
                                    </button>
                                </section>
                            </section>
                        </li>
                    <?php
                        }
                    ?>

                     
                    </ul>
                </section>
                <section class="menu__title-and-items-section">
                    <header>
                        <h2>Plats</h2>
                    </header>
            
                    <ul class="menu__items-list">
                        <li class="menu__list-item">
                            <section class="menu-list-item__figure-section">
                                <figure>
                                    <img src="https://cdn.pixabay.com/photo/2019/06/11/04/00/seafood-4265995_1280.jpg" alt="Homard et Ecrevisses de Bretagne">
                                </figure>
                            </section>
                            <section class="menu-list-item__info-and-actions-section">
                                <section class="menu-list-item__info-section">
                                    <h3>Homard et Ecrevisses de Bretagne</h3>
                                    <span aria-label="prix du produit">16.00 €</span>
                                </section>
                                <section class="menu-list-item__actions-section">
                                    <button type="button">
                                        <span aria-label="icône d'ajout au panier">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </span>
                                    </button>
                                </section>
                            </section>
                        </li>

                        <li class="menu__list-item">
                            <section class="menu-list-item__figure-section">
                                <figure>
                                    <img src="https://cdn.pixabay.com/photo/2019/06/11/03/59/seafood-4265991_1280.jpg" alt="Assiettes de macros">
                                </figure>
                            </section>
                            <section class="menu-list-item__info-and-actions-section">
                                <section class="menu-list-item__info-section">
                                    <h3>Assiettes de macros</h3>
                                    <span aria-label="prix du produit">16.00 €</span>
                                </section>
                                <section class="menu-list-item__actions-section">
                                    <button type="button">
                                        <span aria-label="icône d'ajout au panier">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </span>
                                    </button>
                                </section>
                            </section>
                        </li>

                        <li class="menu__list-item">
                            <section class="menu-list-item__figure-section">
                                <figure>
                                    <img src="https://cdn.pixabay.com/photo/2019/06/11/03/59/trotter-4265990_1280.jpg" alt="image d'un Rôti de porc">
                                </figure>
                            </section>
                            <section class="menu-list-item__info-and-actions-section">
                                <section class="menu-list-item__info-section">
                                    <h3>Rôti de porc</h3>
                                    <span aria-label="prix du produit">25.00 €</span>
                                </section>
                                <section class="menu-list-item__actions-section">
                                    <button type="button">
                                        <span aria-label="icône d'ajout au panier">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </span>
                                    </button>
                                </section>
                            </section>
                        </li>

                        <li class="menu__list-item">
                            <section class="menu-list-item__figure-section">
                                <figure>
                                    <img src="https://cdn.pixabay.com/photo/2017/03/28/07/54/chinese-2181270_1280.jpg" alt="image deBouillie bullfrog">
                                </figure>
                            </section>
                            <section class="menu-list-item__info-and-actions-section">
                                <section class="menu-list-item__info-section">
                                    <h3>Bouillie bullfrog</h3>
                                    <span aria-label="prix du produit">16.00 €</span>
                                </section>
                                <section class="menu-list-item__actions-section">
                                    <button type="button">
                                        <span aria-label="icône d'ajout au panier">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </span>
                                    </button>
                                </section>
                            </section>
                        </li>

                    </ul>
                </section>
                <section class="menu__title-and-items-section">
                    <header>
                        <h2>Desserts</h2>
                    </header>
              
                    <ul class="menu__items-list">
                        <li class="menu__list-item">
                            <section class="menu-list-item__figure-section">
                                <figure>
                                    <img src="https://cdn.pixabay.com/photo/2014/12/11/03/18/ice-cream-563808_1280.jpg" alt="image de de Crême glacée">
                                </figure>
                            </section>
                            <section class="menu-list-item__info-and-actions-section">
                                <section class="menu-list-item__info-section">
                                    <h3>Crême glacée</h3>
                                    <span aria-label="prix du produit">10.00 €</span>
                                </section>
                                <section class="menu-list-item__actions-section">
                                    <button type="button">
                                        <span aria-label="icône d'ajout au panier">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </span>
                                    </button>
                                </section>
                            </section>
                            <li class="menu__list-item">
                                <section class="menu-list-item__figure-section">
                                    <figure>
                                        <img src="https://cdn.pixabay.com/photo/2017/03/31/18/02/strawberry-dessert-2191973_1280.jpg" alt="image de Tiramisu aux fraises">
                                    </figure>
                                </section>
                                <section class="menu-list-item__info-and-actions-section">
                                    <section class="menu-list-item__info-section">
                                        <h3>Tiramisu aux fraises</h3>
                                        <span aria-label="prix du produit">10.00 €</span>
                                    </section>
                                    <section class="menu-list-item__actions-section">
                                        <button type="button">
                                            <span aria-label="icône d'ajout au panier">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </span>
                                        </button>
                                    </section>
                                </section>
                            </li>
    
                        </li>

                    </ul>
                </section> 
            </section>  
     
        </main>
        <footer class="app-footer">
            <ul>
                <li>
                    <a href="./about.html">Qui sommes-nous ?</a>
                </li>
            </ul>
        </footer>
    </body>
</html>