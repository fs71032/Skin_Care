<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skincare Heaven</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5e6d9;
      color: #333;
      line-height: 1.6;
    }

    .navbar {
      background-color: #bf8f5c;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 1rem;
      font-size: 1rem;
      transition: color 0.3s ease;
    }

    .navbar a:hover {
      color: #d2a679;
    }

    .header {
      position: relative;
      height: 50vh;
      background: url('https://www.ravalmd.com/hs-fs/hubfs/AdobeStock_276306017%20(1).jpeg?width=3285&height=2190&name=AdobeStock_276306017%20(1).jpeg') no-repeat center center/cover;
      background-size: cover;
      background-position: center;
    }

    .header-content {
      position: absolute;
      top: 50%;
      right: 10%;
      transform: translateY(-50%);
      text-align: right;
      color: black;
      max-width: 80%;
    }

    .header h1 {
      font-size: 3rem;
      margin: 0;
      font-weight: bold;
    }

    .header p {
      font-size: 1.5rem;
      margin: 0.5rem 0 0;
      font-weight: bold;
    }

    .section {
      padding: 2rem 1rem;
      text-align: center;
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1.5rem 1rem;
    }

    .section.shop-goals {
      background-color: #faf0e6;
      padding: 2rem 1rem;
      border-radius: 8px;
      margin: 1rem auto;
      max-width: 800px;
    }

    .shop-goals h2 {
      font-size: 2rem;
      color: #bf8f5c;
      margin-bottom: 1rem;
    }

    .shop-goals .goals {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }

    .shop-goals .goals button {
      background-color: #d2a679;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .shop-goals .goals button:hover {
      background-color: #bf8f5c;
    }

   
    .section.favorites {
      background-color: #fefefe;
      padding: 2rem 1rem;
      border-radius: 8px;
      margin: 1rem auto;
      max-width: 800px;
    }

    .favorites h2 {
      font-size: 2rem;
      color: #bf8f5c;
      margin-bottom: 1rem;
    }

    .favorites ul {
      list-style: none;
      padding: 0;
      margin: 0 auto;
      max-width: 500px;
    }

    .favorites li {
      margin: 0.5rem 0;
      font-size: 1.1rem;
    }

    .favorites li strong {
      color: #bf8f5c;
    }

    .favorites .button {
      display: inline-block;
      background-color: #bf8f5c;
      color: white;
      padding: 0.8rem 1.5rem;
      text-decoration: none;
      border-radius: 5px;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .favorites .button:hover {
      background-color: #d2a679;
    }

    /* Responsiveness */
    @media (max-width: 1024px) {
      .header h1 {
        font-size: 2.5rem;
      }

      .header p {
        font-size: 1.3rem;
      }

      .navbar {
        flex-direction: column;
        align-items: center;
      }

      .navbar a {
        margin: 0.5rem 0;
      }
    }

    @media (max-width: 768px) {
      .header {
        height: 40vh;
      }

      .header-content {
        right: 5%;
        text-align: center;
        transform: translate(0, -50%);
      }

      .header h1 {
        font-size: 2.5rem;
      }

      .header p {
        font-size: 1.2rem;
      }

      .shop-goals .goals button {
        font-size: 0.9rem;
        padding: 0.6rem 1.2rem;
      }

      .favorites ul {
        max-width: 100%;
      }

      .favorites li {
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
      .header {
        height: 30vh;
      }

      .header h1 {
        font-size: 2rem;
      }

      .header p {
        font-size: 1rem;
      }

      .shop-goals .goals {
        flex-direction: column;
      }

      .shop-goals .goals button {
        width: 100%;
        text-align: center;
      }

      .favorites li {
        font-size: 0.9rem;
      }

      .favorites ul {
        max-width: 100%;
        padding: 0 1rem;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <a href="index.html">Homepage</a>
    <a href="about.html">Rreth Nesh</a>
    <a href="products.html">Produktet</a> 
     <a href="discounts.html">Zbritjet</a> 
    <a href="register.html">Regjistrohu</a>
    <a href="login.html">Login</a>
  </nav>

  <header class="header">
    <div class="header-content">
      <h1>Skincare Heaven</h1>
      <p>Parajsa për Lëkurën Tuaj</p>
    </div>
  </header>

  <section class="section intro">
    <h2>Lëkurë të Shëndetshme dhe Rrezatuese</h2>
    <p>Në Skincare Heaven, ne besojmë në manifestimin e bukurisë natyrale me produkte dhe rutina që rigjenerojnë, ushqejnë dhe transformojnë lëkurën tuaj.</p>
  </section>

  <section class="section shop-goals">
    <h2>Bli sipas asaj që lëkura juaj ka nevojë</h2>
    <div class="goals">
      <button>Ndriçim</button>
      <button>Rigjenerim</button>
      <button>Kundër Plakjes</button>
      <button>Hidratim i Thellë</button>
    </div>
  </section>

  <section class="section favorites">
    <h2>Produktet më të kërkuara:</h2>
    <ul>
      <li><strong>Serumi Ndriçues</strong> – Jepni shkëlqim të menjëhershëm!</li>
      <li><strong>Kremi Hidratues</strong> – Thelbësor për hidratimin tuaj ditor.</li>
      <li><strong>Vaji Rikuperues Botanik</strong> – Rigjenerim gjatë natës.</li>
    </ul>
    <a href="products.html" class="button">Bli Tani</a>
  </section>

  <footer class="footer">
    <p>&copy; 2024 Skincare Heaven. Të gjitha të drejtat janë të rezervuara.</p>
  </footer>
</body>
</html>
