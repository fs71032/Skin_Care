<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skincare Heaven</title>
  <style>
    /* Stilet bazë */
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fdf8f5;
      color: #333;
      line-height: 1.6;
    }

    .header {
      background: linear-gradient(to right, #ff9a8b, #fda085);
      color: white;
      text-align: center;
      padding: 2rem 1rem;
    }

    .header h1 {
      font-size: 3rem;
      margin: 0;
    }

    .header p {
      font-size: 1.2rem;
      margin: 0.5rem 0 0;
    }

    .intro, .promise, .shop-goals, .favorites, .signup {
      padding: 2rem 1rem;
      text-align: center;
    }

    .promise ul {
      list-style: none;
      padding: 0;
    }

    .promise li {
      margin: 1rem 0;
      font-size: 1.1rem;
    }

    .shop-goals .goals {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.5rem;
    }

    .shop-goals .goals button {
      background-color: #fda085;
      color: white;
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }

    .shop-goals .goals button:hover {
      background-color: #ff9a8b;
    }

    .favorites ul {
      list-style: none;
      padding: 0;
      margin: 0 auto;
      max-width: 500px;
    }

    .favorites li {
      margin: 1rem 0;
    }

    .button {
      display: inline-block;
      background-color: #ff9a8b;
      color: white;
      padding: 0.7rem 1.5rem;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 1rem;
      font-size: 1rem;
    }

    .button:hover {
      background-color: #fda085;
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1.5rem 1rem;
    }

    /* Responsivitet për pajisje të vogla */
    @media (max-width: 768px) {
      .header h1 {
        font-size: 2.5rem;
      }

      .header p {
        font-size: 1rem;
      }

      .shop-goals .goals button {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
      }

      .favorites ul {
        padding: 0 1rem;
      }
    }

    /* Responsivitet për pajisje shumë të vogla */
    @media (max-width: 480px) {
      .header h1 {
        font-size: 2rem;
      }

      .header p {
        font-size: 0.9rem;
      }

      .shop-goals .goals {
        flex-direction: column;
        gap: 0.7rem;
      }

      .shop-goals .goals button {
        width: 100%;
        padding: 0.6rem;
        font-size: 0.9rem;
      }

      .favorites ul {
        padding: 0 0.5rem;
      }

      .button {
        font-size: 0.9rem;
        padding: 0.6rem 1rem;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Skincare Heaven</h1>
    <p>Parajsa për Lëkurën Tuaj</p>
  </header>

  <section class="intro">
    <h2>Lëkurë të Shëndetshme dhe Rrezatuese</h2>
    <p>Në Skincare Heaven, ne besojmë në manifestimin e bukurisë natyrale me produkte dhe rutina që rigjenerojnë, ushqejnë dhe transformojnë lëkurën tuaj.</p>
  </section>

  <section class="promise">
    <h2>Premtimi Ynë</h2>
    <ul>
      <li> <strong>Përbërës të Pastër</strong>: Vetëm më të mirët për lëkurën tuaj.</li>
      <li> <strong>Hidratim</strong>: Sepse çdo pamje e ndritshme fillon me hidratim.</li>
      <li> <strong>Qëndrueshmëri</strong>: Bukuri që kujdeset për ju dhe planetin.</li>
    </ul>
  </section>

  <section class="shop-goals">
    <h2>Bli Sipas asaj që lëkura juaj ka nevojë</h2>
    <div class="goals">
      <button>Ndriçim</button>
      <button>Rigjenerim</button>
      <button>Kundër Plakjes</button>
      <button>Hidratim i Thellë</button>
    </div>
  </section>

  <section class="favorites">
    <h2>Produktet e Preferuara të Klientëve</h2>
    <ul>
      <li><strong>Serumi Ndriçues</strong> – Jepni shkëlqim të menjëhershëm!</li>
      <li><strong>Kremi Hidratues Cloud</strong> – Thelbësor për hidratimin tuaj ditor.</li>
      <li><strong>Vaji Rikuperues Botanik</strong> – Rigjenerim gjatë natës.</li>
    </ul>
    <a href="#" class="button">Bli Tani</a>
  </section>

  <section class="signup">
    <h2>Merrni Shkëlqim Hyjnor</h2>
    <p>Behuni një nga klientët tanë fatlum që kanë transformuar lëkurën e tyre me produktet tona super kualitative, të rekomanduara madje edhe nga dermatologët.</p>
    <a href="#" class="button">Regjistrohuni për Ofertat Ekskluzive</a>
  </section>

  <footer class="footer">
    <p>Udhëtimi Juaj Për Lëkurën Fillon Këtu</p>
    <a href="#" class="button">Filloni Udhëtimin</a>
  </footer>
</body>
</html>
