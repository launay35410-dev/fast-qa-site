<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>FAST — Roadmap (Transition Version)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description"
        content="FAST roadmap — transition version. Factual QA traceability framework, methodology-agnostic and durable." />

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fast-frame.css">
</head>

<body>

<header class="header">
  <div class="header-inner">
    <div class="logo">
      <strong>FAST</strong><span>-QA</span>
    </div>
  </div>
</header>

<main class="container" style="max-width: 900px;">

  <section class="problem">
    <h1>FAST — Roadmap <span style="font-weight:400;">(Transition Version)</span></h1>

    <p>
      This roadmap describes the evolution of the <strong>FAST</strong> framework through successive versions.
    </p>

    <p>
      It reflects the current product positioning:
    </p>

    <ul>
      <li>QA traceability</li>
      <li>factual reading</li>
      <li>methodology agnosticism</li>
      <li>long-term durability</li>
    </ul>

    <p style="margin-top:16px; color:#b45309;">
      ⚠️ This document is a <strong>transition version</strong>.<br>
      The definitive FAST roadmap will be frozen at the <strong>end of FAST V2</strong>.
    </p>
  </section>

  <hr>

  <!-- FAST V1 -->
  <section class="problem">
    <h2>FAST V1 — Foundations (Closed & Frozen)</h2>

    <h3>Status</h3>
    <ul>
      <li>Delivered</li>
      <li>Closed and frozen</li>
    </ul>

    <h3>Objectives</h3>
    <ul>
      <li>Introduce factual reading of quality</li>
      <li>Establish a simple and durable traceability model</li>
      <li>Separate facts from interpretations</li>
    </ul>

    <h3>V1 Model</h3>
    <ul>
      <li>User Story</li>
      <li>Scenario</li>
      <li>Execution</li>
    </ul>

    <h3>Characteristics</h3>
    <ul>
      <li>Factual traceability</li>
      <li>File-based results</li>
      <li>Read-only API</li>
      <li>Read-only frontend</li>
      <li>Immutable history</li>
    </ul>

    <h3>Known limitations</h3>
    <ul>
      <li>No automated decision-making</li>
      <li>No quality scoring</li>
      <li>No CI/CD orchestration</li>
      <li>No campaign management</li>
    </ul>

    <p>
      FAST V1 is a <strong>reading foundation</strong>, not a management tool.
    </p>
  </section>

  <hr>

  <!-- FAST V2 -->
  <section class="problem">
    <h2>FAST V2 — Runtime & Industrialization (In progress)</h2>

    <h3>Status</h3>
    <ul>
      <li>In progress</li>
      <li>Current reference version</li>
    </ul>

    <h3>Objectives</h3>
    <ul>
      <li>Industrialize fact production</li>
      <li>Secure reproducibility</li>
      <li>Generalize FAST to all project contexts</li>
      <li>Remove any methodological dependency</li>
    </ul>

    <h3>Canonical FAST Model (V2)</h3>
    <p>
      <strong>Requirement → Scenario → Execution → Test → Anomaly (+ Orphans)</strong>
    </p>

    <ul>
      <li><strong>Requirement</strong>: functional, non-functional, technical, regulatory, User Story (as a type)</li>
      <li><strong>Scenario</strong>: verification description (BDD / Gherkin optional)</li>
      <li><strong>Execution</strong>: observed fact (tool, date, environment, result)</li>
      <li><strong>Test / Anomaly</strong>: attached facts when available</li>
      <li><strong>Orphans</strong>: factual absence of links, no automatic correction</li>
    </ul>

    <h3>Main FAST V2 axes</h3>

    <ul>
      <li><strong>FAST Runtime</strong>: file-based, single source of truth, reproducible startup, no database</li>
      <li><strong>FAST Writers</strong>: facts collection only (JSON, JS, CSV)</li>
      <li><strong>FAST API V2</strong>: versioned, strictly read-only, simple factual aggregations</li>
      <li><strong>FAST Frontend V2</strong>: factual reading, navigation by facts, pedagogical UX</li>
    </ul>

    <h3>Out of scope FAST V2</h3>
    <ul>
      <li>Enriched exports (PDF, interpretive reporting)</li>
      <li>Automated decisions</li>
      <li>Quality scoring</li>
      <li>CI/CD control</li>
      <li>ALM governance</li>
    </ul>
  </section>

  <hr>

  <!-- FAST V3 -->
  <section class="problem">
    <h2>FAST V3 — Advanced Reading & Cross Analysis (Exploratory)</h2>

    <h3>Status</h3>
    <ul>
      <li>Exploratory</li>
      <li>Usage-driven</li>
    </ul>

    <h3>Objectives</h3>
    <ul>
      <li>Enable cross-cutting reading</li>
      <li>Support quality discussions</li>
      <li>Highlight risk areas</li>
    </ul>

    <h3>Constraints</h3>
    <ul>
      <li>Always explainable</li>
      <li>Always traceable</li>
      <li>Disableable</li>
      <li>❌ Never automated decision-making</li>
      <li>❌ Never prescriptive</li>
    </ul>
  </section>

  <hr>

  <!-- FAST V4 -->
  <section class="problem">
    <h2>FAST V4 — Governance & Ecosystem (Conditional)</h2>

    <h3>Status</h3>
    <ul>
      <li>⚠️ Conditional</li>
      <li>Usage-driven only</li>
    </ul>

    <h3>Objectives</h3>
    <ul>
      <li>Support large-scale adoption</li>
      <li>Provide governance without control</li>
    </ul>
  </section>

  <hr>

  <!-- CONCLUSION -->
  <section class="problem">
    <h2>Conclusion</h2>
    <ul>
      <li>FAST V1 is a frozen foundation</li>
      <li>FAST V2 stabilizes and generalizes</li>
      <li>FAST V3 explores cross-cutting reading</li>
      <li>FAST V4 exists only if usage justifies it</li>
    </ul>
  </section>

  <p style="margin-top:32px;">
    <a href="fast-framework-en.php" style="color:#2f80ed; text-decoration:none;">
      ← Back to framework
    </a>
  </p>

</main>

<footer class="footer">
  © FAST-QA — Internal roadmap (transition version)
</footer>

</body>
</html>
