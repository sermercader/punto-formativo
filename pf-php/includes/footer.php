  <footer class="footer pf-fullwidth">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="https://www.puntoformativo.com/" style="text-decoration:none;">
          <p class="name" style="color:#ffffff;">Punto Formativo</p>
        </a>
        <p class="sub">
          Centro de Evaluación y Certificación CONOCER-SEP · CE1842-OC063-18<br>
          Querétaro, México · EC0217 · EC0301 · EC0366 · EC0076 · EC0647 · EC0679<br>
          ICEMexico · Red CONOCER-SEP · Planes de capacitación para empresas
        </p>
      </div>
      <div class="footer-right">
        <div style="display:flex;gap:.75rem;margin-bottom:.5rem;">
          <a href="https://www.facebook.com/puntoformativo" target="_blank" rel="noopener" style="display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);color:#ffffff;transition:.2s ease;text-decoration:none;" onmouseover="this.style.background='#1877F2'" onmouseout="this.style.background='rgba(255,255,255,.1)'">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
          <a href="https://www.instagram.com/puntoformativo/" target="_blank" rel="noopener" style="display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);color:#ffffff;transition:.2s ease;text-decoration:none;" onmouseover="this.style.background='#E1306C'" onmouseout="this.style.background='rgba(255,255,255,.1)'">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
          </a>
        </div>
        <p>© 2026 Punto Formativo. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <script>
    (function () {
      var nav = document.getElementById('navbar');
      var toggle = document.getElementById('navToggle');
      var menu = document.getElementById('navMenu');
      if (toggle && nav && menu) {
        toggle.addEventListener('click', function () {
          var open = !nav.classList.contains('open');
          nav.classList.toggle('open', open);
          toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
          toggle.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
        });
        menu.querySelectorAll('a').forEach(function (link) {
          link.addEventListener('click', function () {
            nav.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Abrir menú');
          });
        });
      }
    })();
  </script>
