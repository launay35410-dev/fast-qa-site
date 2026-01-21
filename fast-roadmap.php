<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>FAST — Roadmap (Version de transition)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description"
        content="FAST roadmap — version de transition. Traçabilité QA factuelle, framework agnostique et durable." />

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
    <h1>FAST — Roadmap <span style="font-weight:400;">(Version de transition)</span></h1>

    <p>
      Cette roadmap décrit l’évolution du framework <strong>FAST</strong> par versions successives.
    </p>

    <p>
      Elle reflète le positionnement actuel du produit :
    </p>

    <ul>
      <li>traçabilité QA</li>
      <li>lecture factuelle</li>
      <li>agnosticité méthodologique</li>
      <li>durabilité dans le temps</li>
    </ul>

    <p style="margin-top:16px; color:#b45309;">
      ⚠️ Ce document est une <strong>version de transition</strong>.<br>
      La roadmap définitive FAST sera figée à la <strong>clôture de FAST V2</strong>.
    </p>
  </section>

  <hr>

  <!-- FAST V1 -->
  <section class="problem">
    <h2>FAST V1 — Fondations (Clos & Figé)</h2>

    <h3>Statut</h3>
    <ul>
      <li>Livré</li>
      <li>Clos et figé</li>
    </ul>

    <h3>Objectifs</h3>
    <ul>
      <li>Introduire la lecture factuelle de la qualité</li>
      <li>Poser un modèle simple et durable de traçabilité</li>
      <li>Séparer faits et interprétations</li>
    </ul>

    <h3>Modèle V1</h3>
    <ul>
      <li>User Story</li>
      <li>Scenario</li>
      <li>Execution</li>
    </ul>

    <h3>Caractéristiques</h3>
    <ul>
      <li>Traçabilité factuelle</li>
      <li>Résultats file-based</li>
      <li>API read-only</li>
      <li>Frontend de lecture</li>
      <li>Historique immuable</li>
    </ul>

    <h3>Limites assumées</h3>
    <ul>
      <li>Pas de décision automatique</li>
      <li>Pas de scoring qualité</li>
      <li>Pas d’orchestration CI/CD</li>
      <li>Pas de pilotage de campagnes</li>
    </ul>

    <p>
      FAST V1 constitue un <strong>socle de lecture</strong>, pas un outil de pilotage.
    </p>
  </section>

  <hr>

  <!-- FAST V2 -->
  <section class="problem">
    <h2>FAST V2 — Runtime & Industrialisation (En cours)</h2>

    <h3>Statut</h3>
    <ul>
      <li>En cours</li>
      <li>Version de référence actuelle</li>
    </ul>

    <h3>Objectifs</h3>
    <ul>
      <li>Industrialiser la production des faits</li>
      <li>Sécuriser la reproductibilité</li>
      <li>Généraliser FAST à tous contextes projet</li>
      <li>Supprimer toute dépendance méthodologique</li>
    </ul>

    <h3>Modèle canonique FAST (V2)</h3>
    <p>
      <strong>Requirement → Scenario → Execution → Test → Anomaly (+ Orphans)</strong>
    </p>

    <ul>
      <li><strong>Requirement</strong> : fonctionnel, non-fonctionnel, technique, réglementaire, User Story (comme type)</li>
      <li><strong>Scenario</strong> : description de vérification (BDD/Gherkin possibles)</li>
      <li><strong>Execution</strong> : fait observé (outil, date, environnement, résultat)</li>
      <li><strong>Test / Anomaly</strong> : faits rattachés si disponibles</li>
      <li><strong>Orphans</strong> : constats d’absence de lien, sans correction automatique</li>
    </ul>

    <h3>Axes principaux FAST V2</h3>

    <ul>
      <li><strong>Runtime FAST</strong> : file-based, source de vérité unique, reproductible, sans base de données</li>
      <li><strong>Writers FAST</strong> : collecte de faits uniquement (JSON, JS, CSV)</li>
      <li><strong>API FAST V2</strong> : versionnée, read-only, agrégations factuelles simples</li>
      <li><strong>Frontend FAST V2</strong> : lecture factuelle, navigation par faits, UX pédagogique</li>
    </ul>

    <h3>Hors scope FAST V2</h3>
    <ul>
      <li>Exports enrichis</li>
      <li>Décision automatisée</li>
      <li>Scoring qualité</li>
      <li>Pilotage CI/CD</li>
      <li>Gouvernance ALM</li>
    </ul>
  </section>

  <hr>

  <!-- FAST V3 -->
  <section class="problem">
    <h2>FAST V3 — Lecture Avancée & Analyse Transverse (Exploratoire)</h2>

    <h3>Statut</h3>
    <ul>
      <li>Exploratoire</li>
      <li>Conditionné aux usages terrain</li>
    </ul>

    <h3>Objectifs</h3>
    <ul>
      <li>Faciliter la lecture transverse</li>
      <li>Supporter la discussion qualité</li>
      <li>Mettre en évidence des zones à risque</li>
    </ul>

    <h3>Contraintes</h3>
    <ul>
      <li>Toujours explicable</li>
      <li>Toujours traçable</li>
      <li>Désactivable</li>
      <li>❌ Jamais décisionnel automatique</li>
      <li>❌ Jamais prescriptif</li>
    </ul>
  </section>

  <hr>

  <!-- FAST V4 -->
  <section class="problem">
    <h2>FAST V4 — Gouvernance & Écosystème (Conditionnel)</h2>

    <h3>Statut</h3>
    <ul>
      <li>⚠️ Conditionnel</li>
      <li>Usage-driven uniquement</li>
    </ul>

    <h3>Objectifs</h3>
    <ul>
      <li>Supporter une adoption à grande échelle</li>
      <li>Apporter de la gouvernance sans contrôle</li>
    </ul>
  </section>

  <hr>

  <!-- CONCLUSION -->
  <section class="problem">
    <h2>Conclusion</h2>
    <ul>
      <li>FAST V1 est un socle figé</li>
      <li>FAST V2 stabilise et généralise</li>
      <li>FAST V3 explore la lecture transverse</li>
      <li>FAST V4 n’existe que si l’usage le justifie</li>
    </ul>
  </section>

  <p style="margin-top:32px;">
    <a href="fast-framework.html" style="color:#2f80ed; text-decoration:none;">
      ← Retour au framework
    </a>
  </p>

</main>

<footer class="footer">
  © FAST-QA — Roadmap interne (version de transition)
</footer>

</body>
</html>
