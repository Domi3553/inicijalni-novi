<!DOCTYPE html>
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
// proba.php — prva PHP sintaksa: varijable, tipovi, spajanje nizova, uvjet i petlja.
// Izvor stranice (Ctrl+U) u pregledniku ne prikazuje ovaj PHP kod, nego samo HTML koji je poslužitelj generirao.

$ime = 'Domagoj';                 // string
$prezime = 'Biščanin';            // string
$razred = '4.RT';                 // string
$godina = (int) date('Y');        // integer — tekuća godina
$usluge = ['Analiza sigurnosti weba', 'Edukacija zaposlenika', 'Sigurnosne politike']; // niz
$jeLokalno = true;                // boolean

$naslov = 'Proba PHP-a — SecureLine';
$opis = 'Probna stranica s prvim primjerima PHP varijabli.';
$aktivna = '';
include 'includes/header.php';
?>

<main id="main">
  <section class="page-head">
    <div class="container">
      <h1>Proba PHP-a</h1>
      <p>Prva stranica koju generira PHP, ne samo poslužuje preglednik.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="card">
        <h2>Varijable</h2>
        <p>Učenik: <strong><?= $ime . ' ' . $prezime ?></strong>, razred <?= $razred ?>.</p>
        <p>Tekuća godina (izračunata na poslužitelju): <strong><?= $godina ?></strong>.</p>
        <p>Pokrenuto lokalno: <strong><?= $jeLokalno ? 'da' : 'ne' ?></strong>.</p>

        <h2>Petlja kroz niz</h2>
        <ul class="proba-lista">
          <?php foreach ($usluge as $broj => $usluga): ?>
            <li><?= $broj + 1 ?>. <?= htmlspecialchars($usluga) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
