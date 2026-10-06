/* =========================================================
   SecureLine — shared site script
   - mobile nav toggle
   - footer year
   - form validation + Formspree AJAX submit (contact + newsletter)
   ========================================================= */

(function () {
  "use strict";

  /* ---------- mobile nav ---------- */
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.querySelector(".main-nav");

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var open = nav.classList.toggle("open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        nav.classList.remove("open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  /* ---------- footer year ---------- */
  document.querySelectorAll("[data-year]").forEach(function (el) {
    el.textContent = new Date().getFullYear();
  });

  /* ---------- helpers ---------- */
  function isValidEmail(value) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
  }

  function showFieldError(field, message) {
    var wrap = field.closest(".form-field");
    if (!wrap) return;
    wrap.classList.add("invalid");
    var err = wrap.querySelector(".field-error");
    if (err) err.textContent = message;
  }

  function clearFieldError(field) {
    var wrap = field.closest(".form-field");
    if (!wrap) return;
    wrap.classList.remove("invalid");
  }

  function setStatus(statusEl, ok, message) {
    if (!statusEl) return;
    statusEl.textContent = message;
    statusEl.classList.remove("ok", "err");
    statusEl.classList.add("show", ok ? "ok" : "err");
  }

  /* ---------- generic Formspree-backed form ---------- */
  function wireForm(form) {
    var statusEl = form.querySelector(".form-status");
    var submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      // clear previous errors
      form.querySelectorAll(".form-field").forEach(function (f) {
        f.classList.remove("invalid");
      });
      if (statusEl) statusEl.classList.remove("show", "ok", "err");

      var valid = true;
      var fields = form.querySelectorAll("[required]");

      fields.forEach(function (field) {
        var value = field.value.trim();
        if (!value) {
          showFieldError(field, "Ovo polje je obavezno.");
          valid = false;
        } else if (field.type === "email" && !isValidEmail(value)) {
          showFieldError(field, "Unesite ispravnu e-mail adresu.");
          valid = false;
        } else {
          clearFieldError(field);
        }
      });

      if (!valid) {
        setStatus(statusEl, false, "Provjerite označena polja i pokušajte ponovno.");
        return;
      }

      var action = form.getAttribute("action") || "";
      if (action.indexOf("YOUR_") !== -1) {
        // Formspree endpoint not yet configured — see README.md
        setStatus(
          statusEl,
          false,
          "Forma još nije spojena na Formspree. Zamijenite YOUR_FORM_ID u kodu (vidi README.md)."
        );
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.dataset.originalText = submitBtn.textContent;
        submitBtn.textContent = "Slanje...";
      }

      fetch(action, {
        method: "POST",
        body: new FormData(form),
        headers: { Accept: "application/json" },
      })
        .then(function (response) {
          if (response.ok) {
            setStatus(
              statusEl,
              true,
              form.dataset.successMessage || "Hvala! Poruka je uspješno poslana."
            );
            form.reset();
          } else {
            setStatus(
              statusEl,
              false,
              "Došlo je do greške prilikom slanja. Pokušajte ponovno ili nas kontaktirajte izravno."
            );
          }
        })
        .catch(function () {
          setStatus(
            statusEl,
            false,
            "Nema veze s poslužiteljem. Provjerite internetsku vezu i pokušajte ponovno."
          );
        })
        .finally(function () {
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = submitBtn.dataset.originalText || "Pošalji";
          }
        });
    });

    // clear field error as user types
    form.querySelectorAll("input, textarea").forEach(function (field) {
      field.addEventListener("input", function () {
        clearFieldError(field);
      });
    });
  }

  document.querySelectorAll("form[data-ajax]").forEach(wireForm);
})();
