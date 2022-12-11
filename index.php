<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portfolio de Graham LAGRANDCOURT, développeur web freelance">
  <link rel="stylesheet" href="./assets/styles.css" />
  <link rel="shortcut icon" href="./img/favicon.webp" type="image/x-icon" />
  <title>Portfolio de Graham</title>
</head>

<body>
  <header>
    <nav>
      <div class="toggle">
        <i class="fa-solid fa-bars ouvrir"></i>
        <i class="fa-solid fa-square-xmark fermer"></i>
      </div>

      <ul>
        <li><a href="#about">A propos</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#skills">Compétences</a></li>
        <li><a href="#works">Projets</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <div class="dark-mode">
      <i class="fa-solid fa-moon"></i>
      <i class="fa-solid fa-sun none"></i>
    </div>
  </header>

  <main>
    <!-- Présentation -->
    <section id="about">
      <img src="./img/moi-removeback.webp" alt="photo de Graham" />
      <h1>
        Bienvenue sur mon portfolio
      </h1>

      <p>J'habites en région parisienne
        et je viens de la belle île de la Dominique.
        <br>
        Après un apprentissage en autodidacte, j'ai suivi une formation à
        DORANCO de niveau BAC+2 pour me remettre sur la bonne route et me
        voilà aujourd'hui devant vous en tant que développeur web. <br>
        Je suis un passionné de nouvelle technologie, d'informatique, de jeu vidéo et c'est pour cela que je vous offre mon expertise et mes compétences
        pour vous accompagner lors de vos divers projets dans le web.
      </p>
    </section>

    <!-- Services proposés -->
    <section id="services">
      <ul>
        <li>Création de votre logo</li>
        <li>Intégration web HTML5 / CSS3 / Javascript</li>
        <li>Développement de votre site web dynamique selon vos besoins</li>
        <li>
          Audit SEO + Aide à l'optimisation
        </li>
        <li>Création et exploitation d'une base de donnée mySQL</li>
        <li>Initiation au développement web pour tout type de public</li>
      </ul>

      <button><a href="CV-Graham-LAGRANDCOURT-webdev.pdf" download>Téléchargez mon CV</a></button>
    </section>

    <!--Compétences -->
    <section id="skills">
      <div>
        <img src="./img/logo-lang/html-css-js-petit.webp" alt="image avec les trois logo html5, css3 et jss" />
        <img src="./img/logo-lang/php.webp" alt="logo php" />
        <img src="./img/logo-lang/database-mysql.webp" alt="image en forme de tasse mySQL" />
        <img src="./img/logo-lang/bootstrap-stack.webp" alt="logo bootstrap" />
        <img src="./img/logo-lang/seo-process.webp" alt="logo avec le process seo" />
        <img src="./img/logo-lang/wordpress.webp" alt="logo wordpress" />
      </div>
    </section>

    <!-- Travaux Finis -->
    <section id="works">
      <div class="container">
        <div class="card-box">
          <div class="card">
            <div class="card-front">
              <a target="_blank" href="https://codepen.io/hargam/pen/NWMbwMm"><img src="./img/loterie.webp" alt="bouton avec un nombre en dessous"></a>
            </div>
            <div class="card-back">
              <h3>Loterie</h3>
              <p>
                <span>Petit projet mise en place pour l'élection des délégués.</span>
                <span>Rien de foufou mais un bon entraînement.</span>
              </p>
              <a href="https://codepen.io/hargam/pen/NWMbwMm">Voir le code</a>
              <hr>
            </div>
          </div>
        </div>

        <div class="card-box">
          <div class="card">
            <div class="card-front">
              <a target="_blank" href="https://github.com/Hargam/blog-js"><img src="./img/blog-js.webp" alt="Entête de blog"></a>
            </div>
            <div class="card-back">
              <h3>Blog - Javascript</h3>
              <p>
                <span>Premier projet dans l'apprentissage du Javascript</span>
                <span>J'ai pu y voir l'ajout d'article par l'utilisateur lui-même ainsi qu'un dark mode simple</span>
              </p>
              <a href="https://github.com/Hargam/blog-js">Voir le code</a>
              <hr>
            </div>
          </div>
        </div>

        <div class="card-box">
          <div class="card">
            <div class="card-front">
              <a target="_blank" href="https://github.com/Hargam/password-gen"><img src="./img/password-gen.webp" alt="Générateur de mots de passe"></a>
            </div>
            <div class="card-back">
              <h3>Générateur de mots de passe</h3>
              <p>
                <span>Dans la continuation du Javascript, premier projet personnel.</span>
                <span>Ceci m'a vraiment permis de comprendre le fonctionnement des fonctions dans un projet qui me sert encore aujourd'hui</span>
              </p>
              <a href="https://github.com/Hargam/password-gen">Voir le code</a>
              <hr>
            </div>
          </div>
        </div>
      </div>

      <div class="card-box">
        <div class="card">
          <div class="card-front">
            <a target="_blank" href="http://skyacademy.fun/"><img src="./img/sky-academy/derouler-coaching-sky.webp" alt="Générateur de mots de passe"></a>
          </div>
          <div class="card-back">
            <h3>Sky Academy</h3>
            <p>
              <span>Projet de fin de stage en tant que Développeur Wordpress</span>
              <span>En plus de l'intégration, un moyen de paiement et un espace membre ont été ajouter</span>
            </p>
            <a href="http://skyacademy.fun/">Voir le site</a>
            <hr>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- Me contacter -->
    <section id="contact">
      <?php
      include "./form.php";
      ?>
    </section>
  </main>

  <footer>
    <div>
      <div class="network">
        <a target="_blank" href="https://www.facebook.com/DeevousD"><i class="fa-brands fa-facebook-square"></i></a>
        <a target="_blank" href="https://github.com/Hargam"><i class="fa-brands fa-github-square"></i></a>
      </div>

      <p>Deevous Design © Copyright <span id="date"></span></p>

      <a href="#" class="top">Haut de page</a>
    </div>
  </footer>

  <script src="./assets/script.js"></script>
  <script src="./assets/burger.js"></script>
</body>

</html>