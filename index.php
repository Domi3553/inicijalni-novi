<!DOCTYPE html>
<<<<<<< HEAD
<html lang="hr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SecureLine — informacijska sigurnost za tvrtke</title>
<meta name="description" content="SecureLine analizira sigurnost web sustava i educira zaposlenike o informacijskoj sigurnosti. Sigurnost bez kompromisa.">
<link rel="icon" type="image/svg+xml" href="images/favicon.svg">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  echo "Dobro došli na stranicu"
  ?>

  <?php include "header.php"; ?>


<a class="skip-link" href="#main">Preskoči na sadržaj</a>
=======
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
$naslov = 'SecureLine — informacijska sigurnost za tvrtke';
$opis = 'SecureLine analizira sigurnost web sustava i educira zaposlenike o informacijskoj sigurnosti. Sigurnost bez kompromisa.';
$aktivna = 'index';
include 'includes/header.php';
?>
>>>>>>> 68898ea10bc127f0d65f2ae39818bd83a5497d94

<main id="main">

  <section class="hero">
    <div class="container">
      <div>
        <p class="hero-eyebrow">Informacijska sigurnost</p>
        <h1>Štitimo ono što je bitno za vaše poslovanje</h1>
        <p>Analiziramo sigurnost vaših web sustava i educiramo zaposlenike da prepoznaju prijetnje prije nego što postanu problem.</p>
        <div class="hero-actions">
          <a href="usluge.php" class="btn btn-primary">Pogledaj usluge</a>
          <a href="kontakt.php" class="btn btn-outline">Zatraži ponudu</a>
        </div>
      </div>
      <svg class="hero-art" viewBox="0 0 400 400" fill="none" role="img" aria-labelledby="heroArtTitle">
        <title id="heroArtTitle">Shematski prikaz zaštićene mreže</title>
        <circle cx="200" cy="200" r="170" stroke="#2B3540" stroke-width="1"/>
        <circle cx="200" cy="200" r="130" stroke="#2B3540" stroke-width="1" stroke-dasharray="4 6"/>
        <circle cx="200" cy="200" r="90" stroke="#2B3540" stroke-width="1"/>
        <path d="M200 90 L250 108V150C250 190 228 218 200 232C172 218 150 190 150 150V108L200 90Z" stroke="#C99A3E" stroke-width="2.5" stroke-linejoin="round"/>
        <circle cx="200" cy="150" r="9" stroke="#C99A3E" stroke-width="2.5"/>
        <path d="M200 159V178" stroke="#C99A3E" stroke-width="2.5" stroke-linecap="round"/>
        <g stroke="#2F6B5E" stroke-width="1.2">
          <line x1="200" y1="30" x2="200" y2="90"/>
          <line x1="335" y1="200" x2="250" y2="170"/>
          <line x1="65" y1="200" x2="150" y2="170"/>
          <line x1="200" y1="370" x2="200" y2="232"/>
        </g>
        <g fill="#2F6B5E">
          <circle cx="200" cy="26" r="4"/>
          <circle cx="339" cy="200" r="4"/>
          <circle cx="61" cy="200" r="4"/>
          <circle cx="200" cy="374" r="4"/>
        </g>
      </svg>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="section-head">
        <h2>Čime se bavimo</h2>
        <p>Dvije stvari najviše utječu na sigurnost jedne tvrtke: dobro postavljen sustav i ljudi koji znaju prepoznati prijetnju.</p>
      </div>
      <div class="grid-3">

        <div class="card service-card">
          <svg class="icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <circle cx="17" cy="17" r="10" stroke="currentColor" stroke-width="2"/>
            <line x1="24.5" y1="24.5" x2="34" y2="34" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <rect x="12" y="15" width="10" height="7" rx="1.5" stroke="currentColor" stroke-width="1.6"/>
            <path d="M14.5 15V13A3 3 0 0 1 20.5 13V15" stroke="currentColor" stroke-width="1.6" fill="none"/>
          </svg>
          <h3>Analiza sigurnosti weba</h3>
          <p>Provjeravamo vaše web stranice i aplikacije i tražimo ranjivosti prije nego što ih pronađe netko drugi.</p>
          <a href="usluge.php" class="read-more">Saznaj više</a>
        </div>

        <div class="card service-card">
          <svg class="icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <circle cx="15" cy="13" r="5" stroke="currentColor" stroke-width="2"/>
            <path d="M6 32C6 25 10 21 15 21C20 21 24 25 24 32" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none"/>
            <path d="M28 15 L35 18V24C35 29 31.5 32.5 28 34C24.5 32.5 21 29 21 24V18L28 15Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
          </svg>
          <h3>Edukacija zaposlenika</h3>
          <p>Radionice koje zaposlenicima pokazuju kako prepoznati phishing, slabe lozinke i druge svakodnevne rizike.</p>
          <a href="usluge.php" class="read-more">Saznaj više</a>
        </div>

        <div class="card service-card">
          <svg class="icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <rect x="10" y="6" width="20" height="28" rx="2" stroke="currentColor" stroke-width="2"/>
            <line x1="15" y1="14" x2="25" y2="14" stroke="currentColor" stroke-width="1.6"/>
            <line x1="15" y1="19" x2="25" y2="19" stroke="currentColor" stroke-width="1.6"/>
            <path d="M15 25 L18 28 L25 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          </svg>
          <h3>Sigurnosne politike</h3>
          <p>Pomažemo definirati jasna pravila za rukovanje podacima, lozinkama i pristupom sustavima.</p>
          <a href="usluge.php" class="read-more">Saznaj više</a>
        </div>

      </div>
    </div>
  </section>

  <section class="section-steel">
    <div class="container">
      <div class="section-head">
        <h2>Najnovije s bloga</h2>
        <p>Kratki, praktični tekstovi o informacijskoj sigurnosti — bez nepotrebnog žargona.</p>
      </div>
      <div class="grid-3">

        <article class="article-card">
          <a class="thumb" href="clanak-phishing.php" tabindex="-1" aria-hidden="true">
            <svg viewBox="0 0 400 225" role="img" aria-hidden="true">
              <rect width="400" height="225" fill="#12181F"/>
              <rect x="140" y="80" width="120" height="80" rx="4" stroke="#C99A3E" stroke-width="2" fill="none"/>
              <path d="M140 84L200 125L260 84" stroke="#C99A3E" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M272 68C283 68 289 77 283 86C278 93 269 93 265 88" stroke="#2F6B5E" stroke-width="2" fill="none" stroke-linecap="round"/>
            </svg>
          </a>
          <div class="article-body">
            <p class="article-meta">Prepoznavanje prijetnji</p>
            <h3><a href="clanak-phishing.php">Kako prepoznati phishing e-mail u 30 sekundi</a></h3>
            <p>Pet znakova upozorenja koje bi svaki zaposlenik trebao znati prije nego što klikne na poveznicu.</p>
            <a class="read-more" href="clanak-phishing.php">Pročitaj više</a>
          </div>
        </article>

        <article class="article-card">
          <a class="thumb" href="clanak-lozinke.php" tabindex="-1" aria-hidden="true">
            <svg viewBox="0 0 400 225" role="img" aria-hidden="true">
              <rect width="400" height="225" fill="#12181F"/>
              <circle cx="170" cy="112" r="22" stroke="#C99A3E" stroke-width="2" fill="none"/>
              <circle cx="170" cy="112" r="7" stroke="#C99A3E" stroke-width="2" fill="none"/>
              <rect x="188" y="106" width="55" height="12" rx="2" fill="none" stroke="#C99A3E" stroke-width="2"/>
              <line x1="212" y1="118" x2="212" y2="128" stroke="#C99A3E" stroke-width="2"/>
              <line x1="228" y1="118" x2="228" y2="126" stroke="#C99A3E" stroke-width="2"/>
            </svg>
          </a>
          <div class="article-body">
            <p class="article-meta">Osnove sigurnosti</p>
            <h3><a href="clanak-lozinke.php">Lozinke i dvofaktorska prijava: kratki vodič</a></h3>
            <p>Zašto je "Ljeto2024!" loša lozinka i kako 2FA zaustavlja većinu upada u račune.</p>
            <a class="read-more" href="clanak-lozinke.php">Pročitaj više</a>
          </div>
        </article>

        <article class="article-card">
          <a class="thumb" href="clanak-ransomware.php" tabindex="-1" aria-hidden="true">
            <svg viewBox="0 0 400 225" role="img" aria-hidden="true">
              <rect width="400" height="225" fill="#12181F"/>
              <rect x="165" y="105" width="70" height="55" rx="6" stroke="#C99A3E" stroke-width="2" fill="none"/>
              <path d="M180 105V90A20 20 0 0 1 220 90V105" stroke="#C99A3E" stroke-width="2" fill="none"/>
              <circle cx="200" cy="128" r="5" fill="#2F6B5E"/>
              <line x1="200" y1="133" x2="200" y2="144" stroke="#2F6B5E" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </a>
          <div class="article-body">
            <p class="article-meta">Prijetnje u porastu</p>
            <h3><a href="clanak-ransomware.php">Ransomware: kako se manje tvrtke mogu pripremiti</a></h3>
            <p>Praktičan pregled sigurnosnih kopija, segmentacije mreže i planiranja odgovora na incident.</p>
            <a class="read-more" href="clanak-ransomware.php">Pročitaj više</a>
          </div>
        </article>

      </div>
      <div style="margin-top:32px;">
        <a href="blog.php" class="btn btn-outline-dark">Svi članci</a>
      </div>
    </div>
  </section>

  <section class="newsletter">
    <div class="container">
      <div class="newsletter-copy">
        <h2>Prijavite se na naše novosti</h2>
        <p>Kratke obavijesti o novim člancima i sigurnosnim upozorenjima. Bez spama.</p>
      </div>
<<<<<<< HEAD
      <form class="newsletter-form" data-ajax action="https://formspree.io/f/mppqjgra" method="POST" data-success-message="Hvala na prijavi! Provjerite svoj inbox.">
=======
      <form class="newsletter-form" data-ajax novalidate action="https://formspree.io/f/mppqjgra" method="POST" data-success-message="Hvala na prijavi! Provjerite svoj inbox.">
>>>>>>> 68898ea10bc127f0d65f2ae39818bd83a5497d94
        <input type="email" name="email" placeholder="vaš e-mail" aria-label="E-mail adresa" required>
        <button type="submit" class="btn btn-primary">Prijavi se</button>
        <p class="newsletter-fineprint">Vašu e-mail adresu nikada ne dijelimo s trećim stranama. Odjava je moguća u svakom trenutku — pogledajte <a href="privatnost.php">politiku privatnosti</a>.</p>
        <div class="form-status" role="status"></div>
      </form>
    </div>
  </section>


</main>
<<<<<<< HEAD
<script src="js/main.js"></script>

<?php include "footer.php"; ?>


</body>
</html>
=======
<?php include 'includes/footer.php'; ?>
>>>>>>> 68898ea10bc127f0d65f2ae39818bd83a5497d94
