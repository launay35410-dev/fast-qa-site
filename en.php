<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>FAST-QA — Coming soon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <meta name="description" content="FAST-QA is a fact-based QA ecosystem: audit, training and a traceability framework for readable, long-term software quality.">

  <!-- CSS FAST-QA -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="header">
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
    <a href="#ecosystem">Ecosystem</a>
    <a href="#problem">Why FAST</a>
    <a href="mailto:contact@fast-qa.io">Contact</a>

    <span class="lang-switch">
      <a href="#" class="active">EN</a> |
      <a href="index.php">FR</a>
    </span>
  </nav>
</div>

</header>

<main class="container">

  <section class="hero">
    <div class="hero-text">
      <h1>
        Structuring software quality,<br>
        from diagnosis to facts
      </h1>

      <p class="subtitle">
        Audit, training, and framework for a clear, traceable, and sustainable QA.
      </p>

      <div class="construction">
        🚧 FAST-QA is currently under progressive deployment
      </div>

      <p class="contact-inline">
        Contact: <a href="mailto:contact@fast-qa.io">contact@fast-qa.io</a>
      </p>
    </div>

    <div class="hero-visual">
      <img src="assets/sphere-main.png" alt="FAST-QA sphere" />
    </div>
  </section>

  <!-- PROBLEM -->
  <section class="problem" id="problem" style="margin-bottom:120px;">
  <h2>Why does QA become difficult to manage over time?</h2>

  <p>
    In most organizations, QA does not lack tools.<br>
    It lacks <strong style="color:#2f80ed;">long-term clarity</strong>.<br>
    Over time:
  </p>

  <ul>
    <li>test intentions fade;</li>
    <li>links between requirements, scenarios, and results weaken;</li>
    <li>decisions increasingly rely on interpretation.</li>
  </ul>

  <p>
    This is not a tooling issue but a matter of
    <strong style="color:#2f80ed;">understanding over time</strong>.
  </p>

  <p style="margin-top:24px;">
    <a href="#top" style="color:#2f80ed; text-decoration:none; font-size:14px;">
      ↑ Back to top
    </a>
  </p>
<section class="cards" id="ecosystem">

  <div class="card">
    <div class="card-header">
      <img src="assets/sphere-services.png" alt="" />
      <h3>FAST · Frame</h3>
    </div>

    <p><strong>QA audit & diagnostic</strong></p>

    <ul style="list-style-type: circle;">
      <li>Audit of existing QA practices</li>
      <li>Quality maturity and traceability assessment</li>
      <li>Identification of risks caused by loss of clarity over time</li>
    </ul>

    <p>
      <strong>Align and structure QA practices without distorting them.</strong>
    </p>
  </div>
<div class="card">
  <div class="card-header">
    <img src="assets/sphere-service1.png" alt="" />
    <h3>FAST · Align</h3>
  </div>

  <p><strong>QA maturity enablement & practice structuring</strong></p>

  <ul style="list-style-type: circle;">
    <li>Definition and implementation of appropriate testing methods and tools</li>
    <li>Support for FAST Framework adoption and rollout</li>
    <li>Structuring and aligning existing QA practices</li>
  </ul>

  <p>
    <strong>Empowering teams towards QA maturity and autonomy.</strong>
  </p>
</div>
  <div class="card">
    <div class="card-header">
      <img src="assets/sphere-fomration.png" alt="" />
      <h3>FAST · Support</h3>
    </div>

    <p><strong>QA training & enablement</strong></p>

    <ul style="list-style-type: circle;">
      <li>QA fundamentals focused on facts and traceability</li>
      <li>Testing methods (functional, BDD, exploratory)</li>
      <li>Long-term team support and coaching</li>
    </ul>

    <p>
      <strong>Train, share knowledge and make teams autonomous.</strong>
    </p>
  </div>

  <div class="card">
    <div class="card-header">
      <img src="assets/sphere-framework.png" alt="" />
      <h3>FAST · Framework</h3>
    </div>

    <p><strong>Factual test traceability</strong></p>

    <ul style="list-style-type: circle;">
      <li>CLI to collect and structure test facts</li>
      <li>QA connectors (manual and automated testing)</li>
      <li>Read-only, facts-only web application</li>
    </ul>

    <p>
      <strong>Durably capitalize test facts through a neutral and readable technical foundation.</strong>
    </p>
  </div>

</section>
<p style="margin-top:24px;">
  <a href="#top" style="color:#2f80ed; text-decoration:none; font-size:14px;">
    ↑ Back to top
  </a>
</p>
<section class="manifest">
  <div class="brand">
    <strong>FAST</strong><span>-QA</span>
  </div>
  <p>
    is not a testing tool.<br>
    It is a fact-based framework.
  </p>
</section>

</main>

<footer class="footer">
  © FAST-QA 2026 — Franck Launay · Version 1.0
  <p style="margin-top:16px; font-size:14px; color:#6b7280;">
    Contact:
    <a href="mailto:contact@fast-qa.io"
       style="color:#2f80ed; text-decoration:none; font-weight:500;">
      contact@fast-qa.io
    </a>
  </p>
  <p style="margin-top:8px; font-size:13px;">
  <a href="legal.php" style="color:#6b7280; text-decoration:none;">
    Legal notice
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
