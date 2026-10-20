<!DOCTYPE html>
<!-- TSD-4RT | DB | 20. 10. 2026. -->
<?php
$naslov = 'Ransomware: kako se manje tvrtke mogu pripremiti — SecureLine';
$opis = 'Praktičan pregled sigurnosnih kopija, segmentacije mreže i planiranja odgovora na sigurnosni incident.';
$aktivna = 'blog';
include 'includes/header.php';
?>

<main id="main">

  <section class="page-head">
    <div class="container article-content">
      <a class="back-link" href="blog.php" style="color:var(--on-ink-muted)">← Svi članci</a>
      <h1>Ransomware: kako se manje tvrtke mogu pripremiti</h1>
      <p>Prijetnje u porastu · 20. kolovoza 2026. · Piše Ivan Kovačević</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="article-content">

        <p>Ransomware napadi se često povezuju s velikim korporacijama, ali manje tvrtke su sve češća meta — upravo zato što obično imaju manje resursa za obranu. Priprema ne mora biti skupa; nekoliko temeljnih koraka pokriva veći dio rizika.</p>

        <h2>Sigurnosne kopije koje stvarno rade</h2>
        <p>Pravilo "3-2-1" i dalje vrijedi: tri kopije podataka, na dva različita medija, od čega je jedna izvan glavne mreže (offline ili u odvojenom oblaku). Ako je kopija dostupna s istog računa koji je zaražen, napadač će je najvjerojatnije i šifrirati zajedno s ostatkom. Redovito testirajte vraćanje podataka iz kopije — kopija koja se ne može vratiti ne vrijedi ništa.</p>

        <h2>Segmentacija mreže</h2>
        <p>Ako je cijela tvrtka na jednoj ravnoj mreži, jedno zaraženo računalo može ugroziti sve ostalo. Odvajanje mreže na manje cjeline — na primjer, uredska mreža odvojena od servera s podacima — usporava širenje i daje vam vrijeme za reakciju.</p>

        <h2>Plan odgovora na incident</h2>
        <p>Kad se incident dogodi, nema vremena za improvizaciju. Jednostavan pisani plan treba odgovoriti na tri pitanja: koga prvog zovete, kako izolirate zaražene uređaje i tko donosi odluku o isključivanju sustava. Plan koji stane na jednu stranicu, a svi ga poznaju, vrijedi više od opsežnog dokumenta koji nitko nije pročitao.</p>

        <div class="article-cta">
          <h3>Niste sigurni gdje je vaša tvrtka najranjivija?</h3>
          <p style="margin-bottom:16px;">Analiza sigurnosti weba i infrastrukture pokazuje konkretne slabosti prije nego što ih netko iskoristi.</p>
          <a href="usluge.php" class="btn btn-outline-dark">Pogledaj analizu sigurnosti</a>
        </div>

      </div>
    </div>
  </section>

</main>
<?php include 'includes/footer.php'; ?>
