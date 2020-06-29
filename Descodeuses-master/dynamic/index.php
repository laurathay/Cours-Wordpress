<!DOCTYPE html>
<!-- https://developer.wordpress.org/reference/ -->
<html <?php language_attributes(); ?>> <!-- a la place de lang="en" dir: "ltr" -->
<head>
  <meta charset="<?php bloginfo('charset'); ?>"> <!-- a la place de utf-8 -->
  <meta name="description" content="<?php bloginfo('description'); ?>">  <!-- cette balise meta est copié coller pour donner la description SEO friendly ou niche (technico-marketing) -->
  <meta name="author" content="<?php bloginfo('author'); ?>"> <!-- cette balise meta est copié coller pour décrire l'auteur -->
  <title><?php bloginfo('name');?></title> <!-- à la place du titre Blog -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?> <!-- pour que wordpress puisse le CMS wordpress puisse mettre sa tambouille une fois fini le head -->
</head>
<body>
  <header class="site-header">
    <nav class="navigation navigation-top desktop-navigation">
      <ul>
        <li><a href="home.html">Accueil</a></li>
        <li><a href="#">Boutique</a></li>
        <li><a href="index.html" class="active">Blog</a></li>
        <li><a href="page.html">Contact</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="home.html">Accueil</a></li>
            <li><a href="#">Boutique</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="page.html">Contact</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="site-branding">
      <a href="index.html"><img src="./assets/images/logo-louvre.png" alt="Logo du site"></a>
    </div>
    <nav class="navigation navigation-aside">
      <ul>
        <li><a href="#"><i class="fas fa-search"></i></a></li>
        <li><a href="#"><i class="fas fa-user"></i></a></li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter">0</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <section class="page-header">
    <h1 class="page-title">Blog</h1>
    <nav class="navigation navigation-blog">
      <ul>
        <li><a href="#" class="active">Tous</a></li>
        <li><a href="#">Peinture</a></li>
        <li><a href="#">Sculpture</a></li>
        <li><a href="#">Exposition</a></li>
        <li><a href="#">Actualité</a></li>
      </ul>
    </nav>
  </section>
  <main class="container site-content">
    <section class="main-content">
      <article class="entry post">
        <header class="entry-header">
          <img src="./assets/images/louvre-alicia-steels-unsplash.jpg" alt="Foule"
          class="featured-image">
          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Actualité</a></h5>
            </section>
            <h2 class="entry-title">
              <a href="single.html">Les visiteurs retrouvent La Joconde</a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="single.html">Lire la suite</a>
          </div>
        </footer>
      </article>
      <article class="entry post">
        <header class="entry-header">
          <img src="./assets/images/louvre-tanya-prodan-unsplash.jpg" alt="Sculptures"
          class="featured-image">
          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Sculpture</a></h5>
            </section>
            <h2 class="entry-title">
              <a href="#">5 statues à voir absolument au Louvre</a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="#">Lire la suite</a>
          </div>
        </footer>
      </article>
      <article class="entry post">
        <header class="entry-header">
          <img src="./assets/images/louvre-jean-carlo-emer-unsplash.jpg" alt="Sculptures"
          class="featured-image">
          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Peinture</a></h5>
            </section>
            <h2 class="entry-title">
              <a href="#">La Joconde victime de son succès</a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="#">Lire la suite</a>
          </div>
        </footer>
      </article>
      <nav class="navigation pagination">
        <ul>
          <li><a href="#"><i class="fas fa-arrow-left"></i> Précédent</a></li>
          <li><a href="#">Suivant <i class="fas fa-arrow-right"></i></a></li>
        </ul>
      </nav>
    </section>
    <aside class="sidebar">
      <div class="widget">
        <h3 class="widget-title">Zone de widgets</h3>
        <p>Ajout dynamique des titres et contenus des widgets.</p>
      </div>
    </aside>
  </main>
  <footer class="site-footer container">
    <section class="widgets-sections">
      <div class="widgets-section widgets-section-1">
        <h4 class="widget-title">Zone de widgets 1</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-2">
        <h4 class="widget-title">Zone de widgets 2</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-3">
        <h4 class="widget-title">Zone de widgets 3</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-4">
        <h4 class="widget-title">Zone de widgets 4</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="footer-infos">
      <div class="navigation-secondary">
        <nav class="navigation navigation-bottom">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="social-medias">
        <nav class="navigation navigation-socials">
          <ul>
            <li><a href="http://twitter.com"></a></li>
            <li><a href="http://instagram.com"></a></li>
            <li><a href="http://facebook.com"></a></li>
            <li><a href="http://pinterest.com"></a></li>
            <li><a href="http://youtube.com"></a></li>
          </ul>
        </nav>
      </div>
    </section>
  </footer>
</body>
</html>
