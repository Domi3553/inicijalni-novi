<header class="site-header">
  <div class="container">
    <a href="index.html" class="logo">
      <svg class="logo-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
        <path d="M20 3 L34 9V19C34 28 28.5 34 20 37C11.5 34 6 28 6 19V9L20 3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
        <circle cx="20" cy="18" r="3.2" stroke="currentColor" stroke-width="2"/>
        <path d="M20 21V26" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
      <span>SecureLine<span class="logo-text-sub">informacijska sigurnost</span></span>
    </a>
    <button class="nav-toggle" aria-label="Otvori navigaciju" aria-expanded="false"><span></span></button>
    <nav class="main-nav" aria-label="Glavna navigacija">
      <a href="index.html" aria-current="page">Početna</a>
      <a href="o-nama.html">O nama</a>
      <a href="usluge.html">Usluge</a>
      <a href="blog.html">Novosti</a>
      <a href="kontakt.html">Kontakt</a>
    </nav>
    <?php

    $naziv_tvrtke="SecureLine d.o.o";

    $godina_osnutka=2026;

    echo $naziv_tvrtke;

    echo "<p>Godina osnutka naše tvrtke je $godina_osnutka</p>"

    echo '<p>Godina kad smo počeli djelovati bila je '.$godina_osnutka.'godina</p>';
    
    ?>
    
  </div>
</header>