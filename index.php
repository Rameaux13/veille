<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Présentation : Marché du développement d'applications</title>
  <style>
    :root {
      --primary-color: #3498db;
      --secondary-color: #2c3e50;
      --accent-color: #e74c3c;
      --light-bg: #f9f9f9;
      --text-color: #333;
      --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      line-height: 1.6;
      color: var(--text-color);
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      background-attachment: fixed;
    }
    
    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px;
    }
    
    header {
      background-color: var(--secondary-color);
      color: white;
      padding: 30px 0;
      text-align: center;
      border-radius: 10px 10px 0 0;
      margin-bottom: 40px;
      background-image: linear-gradient(to right, var(--secondary-color), var(--primary-color));
      position: relative;
      overflow: hidden;
      box-shadow: var(--box-shadow);
    }
    
    header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('/api/placeholder/1100/300');
      background-size: cover;
      background-position: center;
      opacity: 0.2;
    }
    
    .header-content {
      position: relative;
      z-index: 2;
    }
    
    h1 {
      font-size: 2.8rem;
      margin-bottom: 15px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    .subtitle {
      font-size: 1.2rem;
      font-weight: 300;
      max-width: 800px;
      margin: 0 auto;
    }
    
    main {
      background-color: white;
      border-radius: 8px;
      box-shadow: var(--box-shadow);
      padding: 40px;
      margin-bottom: 40px;
    }
    
    section {
      margin-bottom: 60px;
      position: relative;
      padding-bottom: 20px;
    }
    
    section:not(:last-child)::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 10%;
      width: 80%;
      height: 1px;
      background: linear-gradient(to right, transparent, var(--primary-color), transparent);
    }
    
    h2 {
      color: var(--primary-color);
      font-size: 2rem;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--primary-color);
      display: inline-block;
    }
    
    p, ul, ol {
      margin-bottom: 20px;
      font-size: 1.1rem;
    }
    
    ul, ol {
      padding-left: 25px;
    }
    
    li {
      margin-bottom: 8px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 30px 0;
      box-shadow: var(--box-shadow);
      border-radius: 8px;
      overflow: hidden;
    }
    
    th, td {
      padding: 15px;
      text-align: left;
      border: 1px solid #ddd;
    }
    
    th {
      background-color: var(--primary-color);
      color: white;
      font-weight: 600;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    tr:hover {
      background-color: #e6f7ff;
    }
    
    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin: 30px 0;
    }
    
    .card {
      background-color: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: var(--box-shadow);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    .card-image {
      height: 180px;
      background-size: cover;
      background-position: center;
    }
    
    .card-content {
      padding: 20px;
    }
    
    .card h3 {
      color: var(--secondary-color);
      margin-bottom: 10px;
    }
    
    blockquote {
      background-color: #f8f9fa;
      border-left: 5px solid var(--primary-color);
      padding: 20px;
      margin: 30px 0;
      font-style: italic;
      position: relative;
    }
    
   
    
    .stats-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin: 30px 0;
    }
    
    .stat-box {
      background-color: var(--primary-color);
      color: white;
      border-radius: 8px;
      padding: 25px;
      text-align: center;
      box-shadow: var(--box-shadow);
      width: 200px;
      margin: 10px;
    }
    
    .stat-number {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .stat-text {
      font-size: 1rem;
    }
    
    .icon-list {
      list-style: none;
      padding: 0;
    }
    
    .icon-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 15px;
    }
    
    .icon-list li::before {
      content: "✓";
      position: absolute;
      left: 0;
      color: var(--primary-color);
      font-weight: bold;
    }
    
    .image-section {
      margin: 40px 0;
      text-align: center;
    }
    
    .image-container {
      max-width: 100%;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: var(--box-shadow);
    }
    
    .image-section img {
      width: 100%;
      height: auto;
      display: block;
    }
    
    .caption {
      margin-top: 10px;
      font-size: 0.9rem;
      color: #666;
      font-style: italic;
    }
    
    footer {
      text-align: center;
      padding: 20px;
      color: var(--secondary-color);
      font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
      }
      
      main {
        padding: 20px;
      }
      
      .grid-container {
        grid-template-columns: 1fr;
      }
      
      .stats-container {
        flex-direction: column;
        align-items: center;
      }
      
      .stat-box {
        width: 100%;
        max-width: 300px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="header-content">
        <h1>Le marché du développement d'applications</h1>
        <p class="subtitle">Coûts, tendances techniques et propositions financières pour naviguer dans cet écosystème dynamique presenter par le groupe F</p>
      </div>
    </header>
    
    <main>
      <section id="introduction">
        <h2>1. Introduction</h2>
        <p>
          Le développement d'applications est aujourd'hui essentiel à la transformation digitale des entreprises. Qu'il s'agisse de répondre aux besoins des consommateurs ou d'améliorer l'efficacité interne, les applications sont omniprésentes. Cette présentation explore les coûts, les tendances techniques et les modèles financiers liés à ce marché dynamique.
        </p>
        <div class="image-section">
          <div class="image-container">
            <img src="img/1.jpg" alt="Développement d'applications modernes">
          </div>
          <p class="caption">Le développement d'applications joue un rôle central dans la stratégie digitale des entreprises</p>
        </div>
      </section>

      <section id="panorama">
        <h2>2. Panorama du marché</h2>
        <p>
          Le marché mondial dépasse les 200 milliards de dollars d'ici 2025. Les entreprises adoptent une stratégie mobile-first, avec plus de 255 milliards de téléchargements en 2023. Les principales catégories sont :
        </p>
        <div class="stats-container">
          <div class="stat-box">
            <div class="stat-number">200B$</div>
            <div class="stat-text">Marché mondial en 2025</div>
          </div>
          <div class="stat-box">
            <div class="stat-number">255B</div>
            <div class="stat-text">Téléchargements en 2023</div>
          </div>
          <div class="stat-box">
            <div class="stat-number">+15%</div>
            <div class="stat-text">Croissance annuelle</div>
          </div>
        </div>
        <ul class="icon-list">
          <li>Applications mobiles</li>
          <li>Applications web</li>
          <li>SaaS (Software as a Service)</li>
          <li>Applications métiers sur mesure (CRM, ERP, etc.)</li>
        </ul>
        <div class="image-section">
          <div class="image-container">
            <img src="img/3.jpg" alt="Graphique de croissance du marché">
          </div>
          <p class="caption">Évolution du marché des applications depuis 2020 avec projection jusqu'en 2025</p>
        </div>
      </section>

      <section id="couts">
        <h2>3. Coûts du développement</h2>
        <p>Le coût varie selon plusieurs facteurs :</p>
        <div class="grid-container">
          <div class="card">
            <div class="card-image" style="background-image: url('img/2.jpg')"></div>
            <div class="card-content">
              <h3>Complexité</h3>
              <p>Le nombre de fonctionnalités, d'écrans et de logiques métier influence directement le coût.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-image" style="background-image: url('img/4.png')"></div>
            <div class="card-content">
              <h3>Design & UX</h3>
              <p>Un design personnalisé et une expérience utilisateur optimisée augmentent l'investissement.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-image" style="background-image: url('img/5.jpeg')"></div>
            <div class="card-content">
              <h3>Plateformes</h3>
              <p>Chaque plateforme supplémentaire (iOS, Android, web) multiplie les coûts de développement.</p>
            </div>
          </div>
        </div>
        <h3>Exemples de budgets :</h3>
        <ul>
          <li><strong>Application simple :</strong> 5 000 – 15 000 €</li>
          <li><strong>E-commerce :</strong> 15 000 – 40 000 €</li>
          <li><strong>Avec IA ou API :</strong> 100 000 € ou plus</li>
          <li><strong>Sur mesure :</strong> jusqu'à 250 000 €</li>
        </ul>
      </section>

      <section id="tendances">
        <h2>4. Tendances techniques (2024 – 2025)</h2>
        <div class="image-section">
          <div class="image-container">
            <img src="img/6.jpeg" alt="Technologies émergentes dans le développement d'applications">
          </div>
          <p class="caption">Les technologies qui façonnent l'avenir du développement d'applications</p>
        </div>
        <table>
          <thead>
            <tr>
              <th>Tendance</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Low-code / No-code</td>
              <td>Permet de créer des apps rapidement, sans coder</td>
            </tr>
            <tr>
              <td>Progressive Web Apps (PWA)</td>
              <td>Offrent une expérience utilisateur fluide via navigateur</td>
            </tr>
            <tr>
              <td>Intelligence Artificielle</td>
              <td>Pour chatbots, recommandations, analyse intelligente</td>
            </tr>
            <tr>
              <td>API-first et Cloud</td>
              <td>Développement modulaire, rapide, et évolutif</td>
            </tr>
            <tr>
              <td>Flutter / React Native</td>
              <td>Développement multiplateforme avec une seule base</td>
            </tr>
            <tr>
              <td>Sécurité renforcée</td>
              <td>RGPD, chiffrement, authentification biométrique</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="financement">
        <h2>5. Propositions financières</h2>
        <table>
          <thead>
            <tr>
              <th>Modèle</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Forfait fixe</td>
              <td>Adapté aux projets bien définis avec cahier des charges</td>
            </tr>
            <tr>
              <td>Temps passé (TJM)</td>
              <td>Basé sur un tarif journalier (400 – 700 €/jour)</td>
            </tr>
            <tr>
              <td>Abonnement mensuel</td>
              <td>Utilisé pour la maintenance ou les services SaaS</td>
            </tr>
            <tr>
              <td>Modèle hybride</td>
              <td>Forfait de départ + ajustements en fonction de l'évolution</td>
            </tr>
            <tr>
              <td>Stratégies d'optimisation</td>
              <td>MVP, open-source, externalisation (offshore/nearshore)</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="cas">
        <h2>6. Étude de cas : application de livraison locale</h2>
        <p>
          Une application de livraison locale, inspirée d'Uber Eats, a été développée pour une ville moyenne. Objectif : connecter les clients aux restaurants locaux avec livraison géolocalisée.
        </p>
        <div class="grid-container">
          <div class="card">
            <div class="card-content">
              <h3>Budget</h3>
              <ul>
                <li><strong>Initial :</strong> 35 000 €</li>
                <li><strong>Design :</strong> 5 000 €</li>
                <li><strong>Maintenance annuelle :</strong> 8 000 €</li>
                <li><strong>Marketing :</strong> 12 000 €</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <h3>Technologies</h3>
              <ul>
                <li>Flutter</li>
                <li>Firebase</li>
                <li>Google Maps API</li>
                <li>Stripe API</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <h3>Résultats</h3>
              <ul>
                <li>Lancement en 6 mois</li>
                <li>4 000 utilisateurs actifs en 3 mois</li>
                <li>ROI atteint en 1 an</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="conclusion">
        <h2>7. Conclusion</h2>
        <p>
          Le développement d'applications est un levier stratégique et non une simple dépense. Il permet d'innover, d'automatiser et d'atteindre un public ciblé. Une bonne planification, la maîtrise des coûts et le choix technologique adapté sont les clés de réussite.
        </p>
        <blockquote>
          « Le développement d'applications n'est pas une dépense, c'est un levier de croissance. »
        </blockquote>
      </section>
    </main>
    
    <footer>
      <p>© 2025 - Présentation sur le marché du développement d'applications</p>
    </footer>
  </div>
</body>
</html>