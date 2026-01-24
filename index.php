<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>FAST-QA — Site en construction</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <meta name="description" content="FAST-QA est un écosystème QA fondé sur les faits : audit, formation et framework de traçabilité pour une qualité logicielle lisible et durable.">
  <!-- CSS FAST-QA -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header class="header" id="top">
  <div class="header-inner">
  <div class="logo">
    <img src="assets/favicon.png" alt="FAST-QA logo" />
    <div class="brand">
      <strong>FAST</strong><span>-QA</span>
    </div>
  </div>

  <button class="burger" aria-label="Open menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <nav class="nav">
    <a href="#ecosystem">Écosystème</a>
    <a href="#problem">Pourquoi FAST</a>
    <a href="./index.php" class="active">Blog</a>
    <a href="mailto:contact@fast-qa.io">Contact</a>

    <span class="lang-switch">
      <a href="#" class="active">FR</a> |
      <a href="en.php">EN</a>
    </span>
  </nav>
</div>
</header>

  <main class="container">

    <section class="hero">
      <div class="hero-text">
        <h1>
          Structurer la qualité logicielle,<br>
          du diagnostic aux faits
        </h1>

        <p class="subtitle">
        Une approche QA fondée sur les faits, la traçabilité et la lisibilité dans le temps.
        </p>

       <div class="construction">
        🚧 Site FAST-QA en cours de construction — ouverture progressive
      </div></div>

      <div class="hero-visual">
        <img src="assets/sphere-main.png" alt="Sphère FAST-QA" />
      </div>
    </section>
    <!-- PROBLÈME -->
   <section class="problem" id="problem" style="margin-bottom:120px;">
  <h2>Pourquoi la QA devient difficile à piloter dans le temps&nbsp;?</h2>

  <p>
    Dans la plupart des organisations, la QA ne manque pas d’outils.<br>
    Elle manque de <strong style="color:#2f80ed;">lisibilité dans la durée</strong>.<br>
    Avec le temps
  </p>
  <ul>
    <li>les intentions de test se perdent &nbsp;;</li>
    <li>les liens entre besoins, scénarios et résultats se diluent&nbsp;;</li>
    <li>les décisions reposent sur des interprétations.</li>
  </ul>

  <p>
    Ce n’est pas un problème d’outillage mais de
    <strong style="color:#2f80ed;"> compréhension dans le temps.</strong>
  </p>
</p>
<p style="margin-top:24px;">
  <a href="#top" style="color:#2f80ed; text-decoration:none; font-size:14px;">
    ↑ Retour en haut
  </a>
</p>
<section class="cards" id="ecosystem">

  <!-- FAST · Frame -->
  <a href="fast-frame.php" class="card card-link">
    <div class="card-header">
      <img src="assets/sphere-services.png" alt="" />
      <h3>
        <span class="fast-brand">
          <strong>FAST</strong><span> · Frame</span>
        </span>
      </h3>
    </div>

    <p><strong>Audit & diagnostic QA</strong></p>

    <ul style="list-style-type: circle;">
      <li>Audit des pratiques QA existantes</li>
      <li>Évaluation de la maturité qualité et de la traçabilité</li>
      <li>Identification des risques liés à la perte de lisibilité dans le temps</li>
    </ul>

    <p>
      <strong>Aligner et structurer les pratiques QA sans les dénaturer.</strong>
    </p>
  </a>

  <!-- FAST · Align -->
  <a href="fast-align.php" class="card card-link">
    <div class="card-header">
      <img src="assets/sphere-service1.png" alt="" />
      <h3>
        <span class="fast-brand">
          <strong>FAST</strong><span> · Align</span>
        </span>
      </h3>
    </div>

    <p><strong>Accompagnement maturité & structuration des pratiques QA</strong></p>

    <ul style="list-style-type: circle;">
      <li>Mise en place de méthodes et d’outils de test adaptés</li>
      <li>Accompagnement au déploiement du FAST Framework</li>
      <li>Structuration des pratiques QA existantes</li>
    </ul>

    <p>
      <strong>Accompagner les équipes vers l’autonomie et la maturité QA.</strong>
    </p>
  </a>

  <!-- FAST · Support -->
  <a href="fast-support.php" class="card card-link">
    <div class="card-header">
      <img src="assets/sphere-fomration.png" alt="" />
      <h3>
        <span class="fast-brand">
          <strong>FAST</strong><span> · Support</span>
        </span>
      </h3>
    </div>

    <p><strong>Formation & accompagnement QA</strong></p>

    <ul style="list-style-type: circle;">
      <li>Fondamentaux QA orientés faits et traçabilité</li>
      <li>Méthodes de test (fonctionnel, BDD, exploratoire)</li>
      <li>Accompagnement des équipes dans la durée</li>
    </ul>

    <p>
      <strong>Former, transmettre et rendre les équipes autonomes.</strong>
    </p>
  </a>

  <!-- FAST · Framework -->
  <a href="fast-framework.php" class="card card-link">
    <div class="card-header">
      <img src="assets/sphere-framework.png" alt="" />
      <h3>
        <span class="fast-brand">
          <strong>FAST</strong><span> · Framework</span>
        </span>
      </h3>
    </div>

    <p><strong>Traçabilité factuelle des tests</strong></p>

    <ul style="list-style-type: circle;">
      <li>CLI pour collecter et structurer les faits de test</li>
      <li>Connecteurs QA (tests manuels et automatisés)</li>
      <li>WebApp de lecture factuelle (read-only, facts-only)</li>
    </ul>

    <p>
      <strong>
        Capitaliser durablement les faits de test à travers un socle technique
        neutre et lisible.
      </strong>
    </p>
  </a>

</section>

<p style="margin-top:24px;">
  <a href="#top" style="color:#2f80ed; text-decoration:none; font-size:14px;">
    ↑ Retour en haut
  </a>
</p>

<section class="manifest">
  <div class="brand">
    <strong>FAST</strong><span>-QA</span>
  </div>
  <p>
    n’est pas un outil de test.<br>
    C’est un cadre fondé sur les faits.
  </p>
</section>
  </main>

  <footer class="footer">
    © FAST-QA 2026 — Franck Launay · Version 1.0
    <p style="margin-top:16px; font-size:14px; color:#6b7280;">
      Contactez-nous :
      <a href="mailto:contact@fast-qa.io" style="color:#2f80ed; text-decoration:none; font-weight:500;">
        contact@fast-qa.io
      </a>
    </p>
     <p style="margin-top:8px; font-size:13px;">
  <a href="mentions-legales.php" style="color:#6b7280; text-decoration:none;">
    Mentions légales
  </a>
</p>
<p style="margin-top:12px; font-size:14px; color:#6b7280; display:flex; gap:12px; justify-content:center;">
  
  <a href="https://www.linkedin.com/in/franck-launay-10b48017"
     target="_blank"
     rel="noopener"
     style="display:flex; align-items:center; gap:6px; color:#2f80ed; text-decoration:none;">
     
    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         width="18" height="18" fill="currentColor">
      <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.476-.9 1.637-1.85 3.369-1.85 3.601 0 4.267 2.368 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.919-2.064 2.063-2.064 1.14 0 2.064.926 2.064 2.064 0 1.139-.924 2.065-2.064 2.065zM7.119 20.452H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .771 0 1.723v20.555C0 23.229.792 24 1.771 24h20.451C23.2 24 24 23.229 24 22.278V1.723C24 .771 23.2 0 22.222 0z"/>
    </svg>

    Franck Launay
  </a>

  <span style="opacity:.4;">·</span>

  <a href="https://www.linkedin.com/company/fast-qa/"
     target="_blank"
     rel="noopener"
     style="display:flex; align-items:center; gap:6px; color:#2f80ed; text-decoration:none;">

    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         width="18" height="18" fill="currentColor">
      <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.476-.9 1.637-1.85 3.369-1.85 3.601 0 4.267 2.368 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.919-2.064 2.063-2.064 1.14 0 2.064.926 2.064 2.064 0 1.139-.924 2.065-2.064 2.065zM7.119 20.452H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .771 0 1.723v20.555C0 23.229.792 24 1.771 24h20.451C23.2 24 24 23.229 24 22.278V1.723C24 .771 23.2 0 22.222 0z"/>
    </svg>

    FAST-QA
  </a>

</p>

  </footer>
<script>
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav');

  burger.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    burger.setAttribute('aria-expanded', isOpen);
  });
</script>

</body>

</html>