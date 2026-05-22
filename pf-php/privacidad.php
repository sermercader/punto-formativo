<?php
$titulo = "Aviso de Privacidad y Términos | Punto Formativo";
$descripcion = "Consulta cómo tratamos tus datos personales y las condiciones de uso de nuestros servicios de certificación CONOCER en Punto Formativo.";
$css_file = "privacidad.css";
include 'includes/head.php';
?>
<body>

<?php include 'includes/nav.php'; ?>

  <header class="legal-hero pf-fullwidth">
    <div class="container">
      <div class="legal-wrap">
        <span class="eyebrow">Legal</span>
        <h1 class="legal-h1">Aviso de Privacidad y Términos</h1>
        <p class="section-desc">Consulta cómo tratamos tus datos personales y las condiciones de uso de nuestros servicios.</p>

        <div class="legal-tabs" role="tablist" aria-label="Documentos legales">
          <button id="tabPrivacidad" class="tab-btn active" type="button" role="tab" aria-controls="privacidad" aria-selected="true" onclick="show('privacidad', this)">Aviso de privacidad</button>
          <button id="tabTerminos" class="tab-btn" type="button" role="tab" aria-controls="terminos" aria-selected="false" onclick="show('terminos', this)">Términos de servicio</button>
        </div>
      </div>
    </div>
  </header>

  <main class="section pf-fullwidth">
    <div class="container">
      <div class="legal-wrap">

        <section id="privacidad" class="legal-card active" role="tabpanel" aria-labelledby="tabPrivacidad">
          <h2 class="lexend" style="font-size:1.35rem;margin:0 0 .25rem;">Aviso de Privacidad</h2>
          <p class="meta">Última actualización: abril 2026 &nbsp;·&nbsp; Punto Formativo</p>

          <p>Punto Formativo, con sitio web en <strong>www.puntoformativo.com</strong>, es responsable del tratamiento de los datos personales que usted nos proporcione. El presente Aviso de Privacidad se emite en cumplimiento a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP).</p>

          <h2>Datos que recopilamos</h2>
          <p>A través de nuestros formularios podemos recopilar los siguientes datos:</p>
          <ul>
            <li>Nombre completo</li>
            <li>Número de WhatsApp / teléfono</li>
            <li>Correo electrónico</li>
            <li>Ciudad de residencia</li>
            <li>Situación académica o laboral actual</li>
            <li>Área de estudios o interés profesional</li>
          </ul>

          <h2>Finalidad del tratamiento</h2>
          <p>Sus datos personales serán utilizados para las siguientes finalidades:</p>
          <ul>
            <li>Contactarle para brindar información sobre nuestros servicios de formación y certificación</li>
            <li>Dar seguimiento a su proceso de inscripción o certificación</li>
            <li>Enviar comunicaciones relacionadas con fechas, requisitos y disponibilidad de nuestros servicios</li>
            <li>Enviar información sobre promociones y ofertas relacionadas con nuestros programas</li>
          </ul>

          <h2>Transferencia de datos</h2>
          <p>Punto Formativo no vende, alquila ni comparte sus datos personales con terceros con fines comerciales. Sus datos podrán ser compartidos únicamente con proveedores de servicios tecnológicos necesarios para la operación de nuestras comunicaciones, bajo estrictas obligaciones de confidencialidad.</p>

          <h2>Derechos ARCO</h2>
          <p>En términos de la LFPDPPP, usted tiene derecho a Acceder, Rectificar, Cancelar u Oponerse al tratamiento de sus datos personales. Para ejercer estos derechos envíe su solicitud a:</p>
          <p><a href="mailto:contacto@puntoformativo.com" class="email-link">contacto@puntoformativo.com</a></p>
          <p>Atenderemos su solicitud en un plazo no mayor a 20 días hábiles contados a partir de su recepción.</p>

          <h2>Cambios al aviso</h2>
          <p>Nos reservamos el derecho de modificar el presente aviso en cualquier momento. Cualquier cambio será publicado en esta página con la fecha de actualización correspondiente.</p>
        </section>

        <section id="terminos" class="legal-card" role="tabpanel" aria-labelledby="tabTerminos">
          <h2 class="lexend" style="font-size:1.35rem;margin:0 0 .25rem;">Términos de Servicio</h2>
          <p class="meta">Última actualización: abril 2026 &nbsp;·&nbsp; Punto Formativo</p>

          <p>Al proporcionar sus datos a través de nuestros formularios o al contratar nuestros servicios, usted acepta los presentes Términos de Servicio.</p>

          <h2>Descripción del servicio</h2>
          <p>Punto Formativo ofrece servicios de orientación, capacitación, acompañamiento y gestión para el desarrollo y certificación de competencias laborales y profesionales.</p>

          <h2>Uso de la información</h2>
          <p>La información que usted comparte con nosotros será utilizada exclusivamente para brindarle orientación sobre nuestros servicios y dar seguimiento a su proceso. No será utilizada para ningún fin distinto sin su consentimiento expreso.</p>

          <h2>Comunicaciones</h2>
          <p>Al completar nuestros formularios y marcar los casilleros de consentimiento, usted acepta recibir mensajes informativos y promocionales de Punto Formativo a través de WhatsApp, SMS o correo electrónico. Puede cancelar estas comunicaciones en cualquier momento respondiendo STOP o enviando una solicitud a <a href="mailto:contacto@puntoformativo.com" class="email-link">contacto@puntoformativo.com</a>.</p>

          <h2>Responsabilidad</h2>
          <p>Punto Formativo actúa como facilitador de procesos de formación y certificación. En los casos en que la certificación sea emitida por organismos externos, Punto Formativo no garantiza resultados específicos en los procesos de evaluación, ya que estos dependen del desempeño individual de cada candidato.</p>

          <h2>Propiedad intelectual</h2>
          <p>Todo el contenido publicado en nuestros sitios y materiales es propiedad de Punto Formativo y no puede ser reproducido sin autorización previa por escrito.</p>

          <h2>Contacto</h2>
          <p>Para cualquier duda contáctenos en: <a href="mailto:contacto@puntoformativo.com" class="email-link">contacto@puntoformativo.com</a></p>
        </section>

      </div>
    </div>
  </main>

<?php include 'includes/footer.php'; ?>

  <script>
    function show(id, el) {
      document.querySelectorAll('.legal-card').forEach(function(s){ s.classList.remove('active'); });
      document.querySelectorAll('.tab-btn').forEach(function(b){
        b.classList.remove('active');
        b.setAttribute('aria-selected', 'false');
      });
      var panel = document.getElementById(id);
      if (panel) panel.classList.add('active');
      if (el) {
        el.classList.add('active');
        el.setAttribute('aria-selected', 'true');
      }
    }

    function syncFromHash() {
      var hash = (window.location.hash || '').replace('#', '');
      if (hash === 'terminos') { show('terminos', document.getElementById('tabTerminos')); return; }
      if (hash === 'privacidad') { show('privacidad', document.getElementById('tabPrivacidad')); return; }
    }

    window.addEventListener('hashchange', syncFromHash);
    syncFromHash();
  </script>

</body>
</html>
