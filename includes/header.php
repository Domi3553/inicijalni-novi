<?php
// TSD-4RT | DB | 20. 10. 2026.
// includes/header.php — zajedničko zaglavlje svih stranica.
// Stranica prije uključivanja postavlja: $naslov, $opis i $aktivna (slug aktivne poveznice u izborniku).
?>
<html lang="hr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($naslov) ?></title>
<meta name="description" content="<?= htmlspecialchars($opis) ?>">
<link rel="icon" type="image/svg+xml" href="images/favicon.svg">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Preskoči na sadržaj</a>

<header class="site-header">
  <div class="container">
    <a href="index.php" class="logo">
      <svg class="logo-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
        <path d="M20 3 L34 9V19C34 28 28.5 34 20 37C11.5 34 6 28 6 19V9L20 3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
        <circle cx="20" cy="18" r="3.2" stroke="currentColor" stroke-width="2"/>
        <path d="M20 21V26" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
      <span>SecureLine<span class="logo-text-sub">informacijska sigurnost</span></span>
    </a>
    <button class="nav-toggle" aria-label="Otvori navigaciju" aria-expanded="false"><span></span></button>
    <nav class="main-nav" aria-label="Glavna navigacija">
      <a href="index.php"<?= $aktivna === 'index' ? ' aria-current="page"' : '' ?>>Početna</a>
      <a href="o-nama.php"<?= $aktivna === 'o-nama' ? ' aria-current="page"' : '' ?>>O nama</a>
      <a href="usluge.php"<?= $aktivna === 'usluge' ? ' aria-current="page"' : '' ?>>Usluge</a>
      <a href="blog.php"<?= $aktivna === 'blog' ? ' aria-current="page"' : '' ?>>Novosti</a>
      <a href="kontakt.php"<?= $aktivna === 'kontakt' ? ' aria-current="page"' : '' ?>>Kontakt</a>
    </nav>
  </div>
</header>
