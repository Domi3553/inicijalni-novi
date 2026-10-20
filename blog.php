<!DOCTYPE html>
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
$naslov = 'Novosti — SecureLine';
$opis = 'Svi članci SecureLine tima o informacijskoj sigurnosti: phishing, lozinke, ransomware i drugo.';
$aktivna = 'blog';
include 'includes/header.php';
?>

<main id="main">

  <section class="page-head">
    <div class="container">
      <h1>Novosti i članci</h1>
      <p>Kratki, praktični tekstovi o informacijskoj sigurnosti — bez nepotrebnog žargona.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="visually-hidden">Popis članaka</h2>
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
            <p class="article-meta">Prepoznavanje prijetnji · 12. rujna 2026.</p>
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
            <p class="article-meta">Osnove sigurnosti · 3. rujna 2026.</p>
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
            <p class="article-meta">Prijetnje u porastu · 20. kolovoza 2026.</p>
            <h3><a href="clanak-ransomware.php">Ransomware: kako se manje tvrtke mogu pripremiti</a></h3>
            <p>Praktičan pregled sigurnosnih kopija, segmentacije mreže i planiranja odgovora na incident.</p>
            <a class="read-more" href="clanak-ransomware.php">Pročitaj više</a>
          </div>
        </article>

      </div>
      <p class="pricing-note" style="margin-top:32px;">Ovo su primjeri članaka za pokretanje bloga — redovito dodajte nove tekstove kako biste stranicu održali aktualnom.</p>
    </div>
  </section>

</main>
<?php include 'includes/footer.php'; ?>
