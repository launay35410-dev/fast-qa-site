<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>FAST-QA — Legal notice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <!-- FAST-QA CSS -->
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
      <a href="en.php#ecosystem">Ecosystem</a>
      <a href="en.php#problem">Why FAST</a>
      <a href="mailto:contact@fast-qa.io">Contact</a>

      <span class="lang-switch">
        <a href="mentions-legales.php">FR</a> |
        <a href="#" class="active">EN</a>
      </span>
    </nav>
  </div>
</header>

<main class="container">

  <section class="hero" style="padding-bottom:40px;">
    <div class="hero-text">
      <h1>Legal notice</h1>
      <p class="subtitle">
        Legal information related to the FAST-QA website
      </p>
    </div>
  </section>

  <section class="problem" style="margin-bottom:120px; max-width:900px;">

    <h2>Website publisher</h2>
    <p>
      <strong>FAST-QA</strong><br>
      Franck LAUNAY — Sole trader<br>
      Trade name: FAST-QA
    </p>

    <p>
      Address:<br>
      1 bis rue de la Rouairie<br>
      35410 Châteaugiron — France
    </p>

    <p>
      Email:
      <a href="mailto:contact@fast-qa.io" style="color:#2f80ed;">contact@fast-qa.io</a><br>
      Business ID (SIREN): <strong>514 989 516</strong>
    </p><br><br>

    <h2>Publication director</h2>
    <p>
      Franck LAUNAY
    </p><br><br>

    <h2>Hosting</h2>
    <p>
      The FAST-QA website is hosted by:
    </p>

    <p>
      <strong>OVH SAS</strong><br>
      2 rue Kellermann<br>
      59100 Roubaix — France
    </p>

    <p>
      The source code, roadmap and technical assets of the project
      are hosted on <strong>GitHub</strong> (GitHub, Inc., United States).
    </p><br><br>

    <h2>Intellectual property</h2>
    <p>
      All content available on the FAST-QA website
      (texts, visuals, logos, structure, concepts and framework)
      is the exclusive property of FAST-QA, unless stated otherwise.
    </p>

    <p>
      Any reproduction, distribution or representation,
      in whole or in part, without prior written authorization is prohibited.
    </p><br><br>

    <h2>Personal data</h2>
    <p>
      FAST-QA does not collect personal data
      through forms or tracking tools.
    </p>

    <p>
      Email exchanges are strictly limited
      to requests initiated by the user.
    </p>

    <p>
      No personal data is sold, transferred or used
      for commercial purposes.
    </p><br><br>

    <h2>Cookies</h2>
    <p>
      FAST-QA does not use tracking cookies
      or audience measurement tools.
    </p><br><br>

<h2>Website usage</h2>
<p>
The FAST-QA website is intended for professional use.
The information provided describes the positioning,
services and principles of the FAST-QA framework.
</p><br><br>

<h2>Limitation of liability</h2>
<p>
FAST-QA strives to provide accurate and up-to-date information.
However, no guarantee is given regarding the completeness
or timeliness of the published content.
</p><br><br>

<h2>Framework evolution</h2>
<p>
The FAST framework evolves continuously.
Features, components and connectors
may change without prior notice.
</p>
<p>
This evolution follows a continuous improvement approach
while preserving factual stability over time.
</p>
<p style="margin-top:40px;">
      <a href="#top" style="color:#2f80ed; text-decoration:none; font-size:14px;">
        ↑ Back to top
      </a>
  </section>

</main>

<footer class="footer">
  © FAST-QA 2026 — Franck Launay · Version 1.0
  <p style="margin-top:16px; font-size:14px; color:#6b7280;">
    Contact:
    <a href="mailto:contact@fast-qa.io" style="color:#2f80ed; text-decoration:none; font-weight:500;">
      contact@fast-qa.io
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
