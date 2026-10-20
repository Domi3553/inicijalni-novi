# SecureLine — web stranica (sjiwp-web-sigurnost)

Višestranična web stranica za (izmišljenu) tvrtku za informacijsku sigurnost, izrađena u HTML-u, CSS-u, JavaScriptu i PHP-u. Zaglavlje i podnožje održavaju se na jednom mjestu pomoću PHP `include`.

**Autor:** Domagoj Biščanin, 4.RT · Tehnička škola Daruvar · Skriptni jezici i web programiranje

## Pokretanje (localhost)

PHP datoteke moraju se otvoriti preko poslužitelja, ne dvoklikom na datoteku. U mapi projekta:

```bash
php -S localhost:8000
```

zatim u pregledniku otvori `http://localhost:8000/index.php`. Izvor stranice (Ctrl+U) prikazuje samo HTML, a ne PHP kod.

## Struktura

```
index.php               Početna
o-nama.php              O nama — opis, misija, vizija, tim
usluge.php              Usluge + cjenik edukacija
blog.php                Popis članaka (Novosti)
clanak-phishing.php     Članak
clanak-lozinke.php      Članak
clanak-ransomware.php   Članak
kontakt.php             Kontakt obrazac + karta
privatnost.php          Politika privatnosti
uvjeti.php              Uvjeti korištenja
proba.php               Probna stranica s osnovnim PHP varijablama
includes/header.php     Zajedničko zaglavlje (logotip, izbornik)
includes/footer.php     Zajedničko podnožje (podaci o tvrtki, pravno, mreže)
css/style.css           Sav stil
js/main.js              Mobilni izbornik, validacija formi, slanje na Formspree
images/favicon.svg      Favicon
```

Svaka stranica prije uključivanja zaglavlja postavlja tri varijable: `$naslov`, `$opis` i `$aktivna` (označava aktivnu poveznicu u izborniku).

## Obrasci (Formspree)

Newsletter (početna stranica) i kontakt obrazac šalju podatke metodom POST na `https://formspree.io/f/mppqjgra`. Newsletter obrazac ima polje `name="email"`. JavaScript provjerava obavezna polja i oblik e-mail adrese prije slanja.

## Responzivnost

CSS grid i flexbox, `clamp()` za naslove te media queryji na 860, 720 i 520 px. Ispod 720 px izbornik postaje hamburger.

## Oznaka autorstva

Svaka HTML/PHP datoteka u prvom retku iza `<!DOCTYPE html>` ima komentar `<!-- TSD-4RT | DB | 20. 10. 2026. -->`.
