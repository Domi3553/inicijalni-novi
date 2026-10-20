<!DOCTYPE html>
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
$naslov = 'Lozinke i dvofaktorska prijava: kratki vodič — SecureLine';
$opis = 'Zašto je \'Ljeto2024!\' loša lozinka i kako dvofaktorska prijava zaustavlja većinu upada u račune.';
$aktivna = 'blog';
include 'includes/header.php';
?>

<main id="main">

  <section class="page-head">
    <div class="container article-content">
      <a class="back-link" href="blog.php" style="color:var(--on-ink-muted)">← Svi članci</a>
      <h1>Lozinke i dvofaktorska prijava: kratki vodič</h1>
      <p>Osnove sigurnosti · 3. rujna 2026. · Piše Marko Novak</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="article-content">

        <p>"Ljeto2024!" izgleda kao pristojna lozinka — ima veliko slovo, broj i uskličnik. Problem je što je upravo takav obrazac (sezona + godina + znak) jedan od prvih koje alati za probijanje lozinki isprobavaju. Duljina i nepredvidljivost su ono što stvarno štiti račun, ne izgled složenosti.</p>

        <h2>Što čini lozinku dobrom</h2>
        <ul>
          <li><strong>Duljina prije svega.</strong> Fraza od četiri nasumične riječi teže se probija od kratke lozinke punom posebnih znakova.</li>
          <li><strong>Jedinstvena za svaki račun.</strong> Ista lozinka na više mjesta znači da jedno probijeno mjesto ugrožava sve ostale.</li>
          <li><strong>Upravitelj lozinki umjesto pamćenja.</strong> Alat generira i čuva jedinstvene lozinke, a vi pamtite samo jednu glavnu.</li>
        </ul>

        <h2>Zašto je dvofaktorska prijava (2FA) toliko bitna</h2>
        <p>Dvofaktorska prijava traži drugi dokaz identiteta uz lozinku — kod iz aplikacije, SMS ili sigurnosni ključ. Čak i ako napadač sazna lozinku, bez tog drugog koraka ne može ući u račun. Prema dostupnim analizama sigurnosnih incidenata, uključivanje 2FA zaustavlja veliku većinu pokušaja neovlaštenog pristupa računima.</p>
        <p>Preporuka: uključite 2FA prvo na e-mailu i bilo kojem sustavu koji čuva financijske ili osobne podatke — ti su računi obično prva meta.</p>

        <div class="article-cta">
          <h3>Nije sigurno je li vaš tim koristi 2FA posvuda?</h3>
          <p style="margin-bottom:16px;">U sklopu osnovne edukacije prolazimo i kroz postavljanje 2FA i upravitelja lozinki, korak po korak.</p>
          <a href="usluge.php" class="btn btn-outline-dark">Pogledaj edukacije</a>
        </div>

      </div>
    </div>
  </section>

</main>
<?php include 'includes/footer.php'; ?>
