

  <footer class="footer" id="footer">
    <section class="facebook_sells_your_personal_data">
      <hgroup class="feed_title">
        <h3 class="font_size_3">Síguenos en Instagram</h3>
        <h5 class="feed_link font_size_6"><a href="https://www.instagram.com/esfacilsisabescomo/?hl=es" target="_blank">@esfacilsisabescomo</a></h5>
      </hgroup>
      <?php echo do_shortcode('[instagram-feed]') ?>
    </section>
    <div class="piqui">
      <h5 class="piqui_title font_size_6">Contacto</h5>
      <p class="piqui_deco">-</p>
      <p class="piqui_item">Vivir Despierto</p>
      <p class="piqui_item">Finca Las Bardas s/n.</p>
      <p class="piqui_item">39408 Coo de Buelna (Cantabria)</p>
      <p class="piqui_item">rhea@esfacilsisabescomo.com</p>
      <p class="piqui_item">902 102 810 - 655 882 160</p>
    </div>
    <div class="piqui">
      <h5 class="piqui_title font_size_6">Info</h5>
      <p class="piqui_deco">-</p>
      <p class="piqui_item">Términos y condiciones</p>
      <p class="piqui_item">Politica de Privacidad</p>
      <p class="piqui_item">Como llegar a la finca Las Bardas</p>
    </div>
    <form class="piqui">
      <h5 class="piqui_title font_size_6">Newsletter</h5>
      <p class="piqui_deco">-</p>
      <input class="piqui_input" type="text" value="" placeholder="Nombre">
      <input class="piqui_input" type="text" value="" placeholder="Email">
      <div class="piqui_acceptance">
        <input class="piqui_acceptance_input" type="checkbox" name="acceptance">
        <label class="piqui_acceptance_label" for="acceptance">He leido y acepto la
          <a class="piqui_acceptance_link" href="<?php get_site_url('aviso-legal') ?>">Política de privacidad</a>
        </label>
      </div>
      <input class="piqui_send" type="submit" value="SEND">
    </form>
    <div class="piqui">
      <h5 class="piqui_title font_size_6">Follow</h5>
      <p class="piqui_deco">-</p>
      <p class="piqui_item">Instagram</p>
      <p class="piqui_item">Facebook</p>
      <p class="piqui_item">Linkedin</p>
      <p class="piqui_item">YouTube</p>
    </div>

    <a class="logo" href="<?php echo get_site_url(); ?>">
      <svg class="logo_img" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 101 104">
        <use xlink:href="#logo"></use>
      </svg>
    </a>

  </footer>
  <sign class="signature">
    <p>&#60;&#47;&#62; with <3 by <a href="https://lattedev.com/" target="_blank" class="latteLink">Latte</a></p>
  </sign>
  <?php wp_footer(); ?>
</body>
</html>
