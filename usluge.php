<!DOCTYPE html>
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
$naslov = 'Usluge i cjenik — SecureLine';
$opis = 'Analiza sigurnosti web sustava, edukacija zaposlenika i izrada sigurnosnih politika. Pogledajte cjenik edukacija po satu.';
$aktivna = 'usluge';
include 'includes/header.php';
?>

<main id="main">

  <section class="page-head">
    <div class="container">
      <h1>Usluge</h1>
      <p>Tri načina kako vam pomažemo smanjiti sigurnosni rizik — tehnički, kroz ljude i kroz jasna pravila.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="visually-hidden">Naše usluge</h2>
      <div class="grid-3">

        <div class="card service-card">
          <svg class="icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <circle cx="17" cy="17" r="10" stroke="currentColor" stroke-width="2"/>
            <line x1="24.5" y1="24.5" x2="34" y2="34" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <rect x="12" y="15" width="10" height="7" rx="1.5" stroke="currentColor" stroke-width="1.6"/>
            <path d="M14.5 15V13A3 3 0 0 1 20.5 13V15" stroke="currentColor" stroke-width="1.6" fill="none"/>
          </svg>
          <h3>Analiza sigurnosti weba</h3>
          <p>Provjeravamo vaše web stranice i aplikacije i tražimo ranjivosti prije nego što ih pronađe netko drugi. Nakon analize dobivate izvještaj s jasno rangiranim nalazima i preporukama za popravak.</p>
        </div>

        <div class="card service-card">
          <svg class="icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <circle cx="15" cy="13" r="5" stroke="currentColor" stroke-width="2"/>
            <path d="M6 32C6 25 10 21 15 21C20 21 24 25 24 32" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none"/>
            <path d="M28 15 L35 18V24C35 29 31.5 32.5 28 34C24.5 32.5 21 29 21 24V18L28 15Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
          </svg>
          <h3>Edukacija zaposlenika</h3>
          <p>Radionice o prepoznavanju phishinga, sigurnim lozinkama i svakodnevnim rizicima — prilagođene i općim zaposlenicima i IT timovima. Uključuje i simulirane phishing kampanje po dogovoru.</p>
        </div>

        <div class="card service-card">
          <svg class="icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <rect x="10" y="6" width="20" height="28" rx="2" stroke="currentColor" stroke-width="2"/>
            <line x1="15" y1="14" x2="25" y2="14" stroke="currentColor" stroke-width="1.6"/>
            <line x1="15" y1="19" x2="25" y2="19" stroke="currentColor" stroke-width="1.6"/>
            <path d="M15 25 L18 28 L25 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          </svg>
          <h3>Sigurnosne politike</h3>
          <p>Pomažemo definirati jasna pravila i procedure za rukovanje podacima, lozinkama i pristupom sustavima — dokumente koje vaš tim doista razumije i koristi.</p>
        </div>

      </div>
    </div>
  </section>

  <section class="section-steel">
    <div class="container">
      <div class="section-head">
        <h2>Cjenik edukacija</h2>
        <p>Okvirne cijene po satu, po kategoriji edukacije. Konačna ponuda ovisi o broju polaznika, lokaciji i opsegu teme.</p>
      </div>

      <div class="table-scroll">
      <table class="pricing-table">
        <thead>
          <tr>
            <th>Kategorija</th>
            <th>Za koga je</th>
            <th>Cijena</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Osnovna edukacija</td>
            <td class="cat">Opći zaposlenici — phishing, lozinke, osnove sigurnog rada</td>
            <td class="price">45 €/h</td>
          </tr>
          <tr>
            <td>Napredna edukacija</td>
            <td class="cat">IT i tehnički timovi — sigurno kodiranje, upravljanje pristupom</td>
            <td class="price">70 €/h</td>
          </tr>
          <tr>
            <td>Individualne konzultacije</td>
            <td class="cat">Rad jedan na jedan s vlasnikom ili voditeljem tvrtke</td>
            <td class="price">90 €/h</td>
          </tr>
          <tr>
            <td>Grupna radionica</td>
            <td class="cat">Veće grupe (10+ polaznika), cijena po polazniku</td>
            <td class="price">15 €/h po osobi</td>
          </tr>
        </tbody>
      </table>
      </div>
      <p class="pricing-note">Cijena analize sigurnosti weba i izrade sigurnosnih politika ovisi o opsegu sustava i dogovara se pojedinačno. Pošaljite upit za personaliziranu ponudu.</p>

      <div style="margin-top:28px;">
        <a href="kontakt.php" class="btn btn-primary">Zatraži ponudu</a>
      </div>
    </div>
  </section>

</main>
<?php include 'includes/footer.php'; ?>
