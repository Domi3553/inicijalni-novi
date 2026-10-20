<!DOCTYPE html>
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
$naslov = 'Kontakt — SecureLine';
$opis = 'Javite nam se za ponudu analize sigurnosti weba ili edukacije zaposlenika. Adresa: Ivana Gundulića 14, Daruvar.';
$aktivna = 'kontakt';
include 'includes/header.php';
?>

<main id="main">

  <section class="page-head">
    <div class="container">
      <h1>Kontaktirajte nas</h1>
      <p>Javite nam se za ponudu ili pitanje — odgovaramo u roku od jednog radnog dana.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="grid-2" style="align-items:start;gap:40px;">

        <div class="card">
          <h2 style="margin-bottom:20px;">Pošaljite upit</h2>
          <form data-ajax novalidate action="https://formspree.io/f/mppqjgra" method="POST" data-success-message="Hvala! Javit ćemo vam se u najkraćem mogućem roku.">

            <div class="form-row">
              <div class="form-field">
                <label for="ime">Ime <span class="req">*</span></label>
                <input type="text" id="ime" name="ime" required>
                <p class="field-error">Molimo unesite ime.</p>
              </div>
              <div class="form-field">
                <label for="prezime">Prezime <span class="req">*</span></label>
                <input type="text" id="prezime" name="prezime" required>
                <p class="field-error">Molimo unesite prezime.</p>
              </div>
            </div>

            <div class="form-row">
              <div class="form-field">
                <label for="email">E-mail <span class="req">*</span></label>
                <input type="email" id="email" name="email" required>
                <p class="field-error">Unesite ispravnu e-mail adresu.</p>
              </div>
              <div class="form-field">
                <label for="telefon">Telefon <span class="req">*</span></label>
                <input type="tel" id="telefon" name="telefon" required>
                <p class="field-error">Molimo unesite broj telefona.</p>
              </div>
            </div>

            <div class="form-field">
              <label for="poruka">Poruka <span class="req">*</span></label>
              <textarea id="poruka" name="poruka" required></textarea>
              <p class="field-error">Molimo napišite poruku.</p>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Pošalji upit</button>
            <div class="form-status" role="status"></div>
          </form>
        </div>

        <div>
          <div class="card" style="margin-bottom:24px;">
            <h2 style="margin-bottom:16px;">Izravan kontakt</h2>
            <p><strong>Adresa</strong><br>Ivana Gundulića 14, 43500 Daruvar</p>
            <p><strong>E-mail</strong><br><a href="mailto:info@secureline.hr">info@secureline.hr</a></p>
            <p><strong>Telefon</strong><br><a href="tel:+38543123456">+385 43 123 456</a></p>
            <p style="margin-bottom:0;"><strong>Radno vrijeme</strong><br>Ponedjeljak–petak, 8:00–16:00</p>
          </div>

          <div class="map-embed">
            <iframe
              src="https://www.google.com/maps?q=Ivana+Gundulića+14,+Daruvar&output=embed"
              title="Lokacija SecureLine — Ivana Gundulića 14, Daruvar"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
<?php include 'includes/footer.php'; ?>
