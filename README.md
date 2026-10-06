# SecureLine — web stranica

Statična višestranična web stranica za (izmišljenu, za sada) tvrtku za informacijsku sigurnost. Čista HTML/CSS/JS — bez build alata, bez frameworka. Radi odmah kad se datoteke otvore u pregledniku, i spremna je za GitHub Pages.

## Struktura

```
index.html            Početna
o-nama.html            O nama — misija, vizija, tim
usluge.html             Usluge + cjenik edukacija
blog.html                Svi članci
clanak-phishing.html     Članak
clanak-lozinke.html      Članak
clanak-ransomware.html   Članak
kontakt.html             Kontakt forma + karta
privatnost.html          Politika privatnosti
uvjeti.html               Uvjeti korištenja
css/style.css             Sav stil (jedna datoteka)
js/main.js                Mobilni izbornik + validacija formi + slanje na Formspree
images/favicon.svg        Favicon (znak štita)
```

Svaka stranica ima identično zaglavlje i podnožje — mijenja se samo sadržaj u sredini, točno kako je traženo.

## 1. Prije nego objavite: zamijenite placeholder sadržaj

Ovo je predložak s izmišljenim podacima koje treba zamijeniti pravima:

- **Naziv tvrtke / logo** — trenutno "SecureLine". Logo je jednostavan SVG znak (štit s bravom), ugrađen izravno u svaku stranicu — lako ga je zamijeniti drugim SVG-om ako budete htjeli pravi dizajniran logo.
- **Kontakt podaci** — email `info@secureline.hr`, telefon `+385 43 123 456`, radno vrijeme — nalaze se u podnožju svake stranice i na `kontakt.html`.
- **Adresa** — Ivana Gundulića 14, Daruvar (karta na `kontakt.html` i poveznica u podnožju).
- **Društvene mreže** — linkovi na Facebook/LinkedIn/Instagram u podnožju trenutno vode na `facebook.com/secureline` itd. — zamijenite stvarnim profilima.
- **Tim** — na `o-nama.html` su tri izmišljena stručnjaka s inicijalima umjesto fotografija. Zamijenite imena, uloge i po želji dodajte prave fotografije (zamijenite `<div class="avatar">IK</div>` s `<img>` oznakom).
- **Cijene** — tablica na `usluge.html` ima primjer cijena i kategorija; prilagodite stvarnim iznosima.
- **Članci** — tri članka su primjeri za pokretanje bloga; dodavajte nove tako da kopirate jedan od `clanak-*.html` fajlova kao predložak.

## 2. Spajanje newsletter i kontakt forme (Formspree)

Obje forme (newsletter na početnoj stranici i kontakt forma na `kontakt.html`) šalju podatke na [Formspree](https://formspree.io) — besplatan servis koji prima podatke s formi i šalje vam ih na email / sprema u dashboard, bez potrebe za vlastitim backendom i bazom podataka.

**Koraci:**

1. Napravite besplatan račun na [formspree.io](https://formspree.io).
2. Napravite **dva** forma u Formspree dashboardu — jedan za newsletter, jedan za kontakt upite (preporučeno, radi lakšeg razdvajanja u inboxu).
3. Za svaki formular Formspree vam daje endpoint oblika `https://formspree.io/f/xxxxxxxx`.
4. U kodu zamijenite:
   - `YOUR_NEWSLETTER_FORM_ID` u `index.html` (u `<form class="newsletter-form" ... action="...">`)
   - `YOUR_CONTACT_FORM_ID` u `kontakt.html`
5. Gotovo — forme rade, e-mailovi se stvarno spremaju kod Formspreea i stižu vam na mail.

Dok god placeholder ID nije zamijenjen, forma će korisniku prikazati poruku da još nije spojena (ne pada tiho — jasno je da nešto nedostaje).

**Napomena o privatnosti:** politika privatnosti (`privatnost.html`) već spominje Formspree kao izvršitelja obrade — ako odaberete drugi servis, ažurirajte taj odlomak.

## 3. Objava na GitHubu (GitHub Pages)

1. Napravite novi repozitorij na GitHubu (npr. `secureline-website`).
2. U ovom folderu pokrenite:
   ```bash
   git add .
   git commit -m "Prva verzija stranice"
   git branch -M main
   git remote add origin https://github.com/VAS-USERNAME/secureline-website.git
   git push -u origin main
   ```
3. Na GitHubu: **Settings → Pages → Source** → odaberite granu `main` i folder `/ (root)` → Save.
4. Za par minuta stranica će biti dostupna na `https://VAS-USERNAME.github.io/secureline-website/`.

## 4. Testiranje

- Otvorite `index.html` izravno u pregledniku za brzi pregled bez ikakvog servera.
- Za testiranje na mobitelu/tabletu: u Chrome/Firefox DevTools uključite "Responsive design mode" (ili otvorite objavljenu GitHub Pages adresu na stvarnom uređaju).
- Provjerite da svi linkovi u navigaciji i podnožju rade i da se mobilni hamburger izbornik otvara ispod 720px širine.

## 5. Fontovi i boje

Fontovi (Space Grotesk za naslove, IBM Plex Sans za tekst) učitavaju se s Google Fonts u `css/style.css`. Sve boje su definirane kao CSS varijable na vrhu te datoteke (`:root { --ink: ...; --brass: ...; }`) — mijenjajte ih na jednom mjestu za cijelu stranicu.
