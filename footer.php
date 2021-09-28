

  <footer class="footer" id="footer">
    <section class="facebook_sells_your_personal_data">
      <hgroup class="feed_title">
        <!-- <div class="redDot test" id="shareButton"></div> -->
        <h3 class="font_size_3">Síguenos en Instagram</h3>
        <h5 class="feed_link font_size_7"><a href="https://www.instagram.com/esfacilsisabescomo/?hl=es" target="_blank">@esfacilsisabescomo</a></h5>
      </hgroup>
    </section>
    <div class="piqui">
      <h5 class="piqui_title font_size_8">Contacto</h5>
      <p class="piqui_deco">-</p>
      <p class="piqui_item">Vivir Despierto</p>
      <p class="piqui_item">Finca Las Bardas s/n.</p>
      <p class="piqui_item">39408 Coo de Buelna (Cantabria)</p>
      <p class="piqui_item">rhea@esfacilsisabescomo.com</p>
      <p class="piqui_item">902 102 810 - 655 882 160</p>
    </div>
    <div class="piqui">
      <h5 class="piqui_title font_size_8">Info</h5>
      <p class="piqui_deco">-</p>
      <?php
      $args = array(
        'theme_location' => 'footer_nav',
        'depth' => 0,
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'piqui footer_nav',
      );
      wp_nav_menu($args);
      ?>
    </div>

    <!-- COPIA DEL FORMULARIO DE SENDINGBLUE -->
    <!-- <div class="piqui">
      <h5 class="piqui_title font_size_8">Newsletter</h5>
      <p class="sib-email-area">
        <input type="email" class="piqui_input sib-email-area" name="email" placeholder="Email" required="required">
      </p>
      <p class="sib-NAME-area">
        <input class="piqui_input" type="text" placeholder="Nombre" class="sib-NAME-area" name="NAME" >
      </p>
      <div class="piqui_acceptance_label">
        <input class="piqui_acceptance_label" type="checkbox" name="terms" required="required"><a href="esfacilsisabescomo.com/politica-de-privacidad/">He leido y acepto la Política de privacidad</a>
      </div>
      <p>
        <input class="piqui_send" type="submit" class="sib-default-btn" value="SEND">
      </p>
    </div> -->


    <?php echo do_shortcode('[sibwp_form id=1]'); ?>


    <div class="piqui">
      <h5 class="piqui_title font_size_8">Follow</h5>
      <p class="piqui_deco">-</p>
      <a href="https://www.instagram.com/esfacilsisabescomo/" target="_blank" class="piqui_item">Instagram</a>
      <a href="https://www.facebook.com/rheaygeoffrey/" target="_blank" class="piqui_item">Facebook</a>
      <a href="https://www.linkedin.com/company/18441366/admin/" target="_blank" class="piqui_item">Linkedin</a>
      <a href="https://www.youtube.com/channel/UC1wC9YlN95TMRkOpwyWaSQQ/featured" target="_blank" class="piqui_item">YouTube</a>
    </div>

    <a class="logo" href="<?php echo get_site_url(); ?>">
      <svg class="logo_img" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 101 104">
        <use xlink:href="#logo"></use>
      </svg>
    </a>

    <?php if (is_user_logged_in()) { ?>

<?php }else { ?>
<div style="width: 100%; height: 38px; z-index: 1; position: absolute; background: var(--greyf5); bottom: -37px; left: 0;"></div>
<?php } ?>

  </footer>
  <sign class="signature">
    <p>&#60;&#47;&#62; with <3 by <a href="https://lattedev.com/" target="_blank" class="latteLink">Latte</a></p>
  </sign>
  <?php wp_footer(); ?>

      <?php
      // var_dump($_GET);
      if ( isset($_GET['status']) && $_GET['status'] == 'sent' ) {
        echo "<script async defer type='text/javascript'>
          notify('".__('Mensaje enviado', 'tp_domain')."', '".__('Muchas gracias, nos pondremos en contacto contigo pronto', 'tp_domain')."')
        </script>";
      }
      ?>
</body>
</html>
