<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <!-- colocar aqui el bloque del encabezado -->
  <h1 class="main_title font_size_1"><?php the_title() ?></h1>
  <figure class="captioned_figure">
    <img class="captioned_figure_img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Foto destacada de la publicación" class="captioned_figure_img">
    <figcaption class="captioned_figure_capt">
      <div class="captioned_figure_title_container">
        <p class="captioned_figure_title font_size_6">
          <?php echo get_the_author_meta('display_name'); ?>
        </p>
        <div class="captioned_figure_deco"></div>
      </div>
      <p class="captioned_figure_txt"><?php echo get_the_excerpt() ?></p>
    </figcaption>
  </figure>
  <div class="aditional_info">
    <div class="aditional_info_item">
      <svg class="aditional_info_icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor" d="M400 64h-48V12c0-6.6-5.4-12-12-12h-8c-6.6 0-12 5.4-12 12v52H128V12c0-6.6-5.4-12-12-12h-8c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h352c8.8 0 16 7.2 16 16v48H32v-48c0-8.8 7.2-16 16-16zm352 384H48c-8.8 0-16-7.2-16-16V192h384v272c0 8.8-7.2 16-16 16zM148 320h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm96 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm96 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-96 96h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-96 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm192 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12z" ></path>
      </svg>
      <p class="aditional_info_txt"><?php echo get_the_date() ?></p>
    </div>
    <div class="aditional_info_item">
      <svg class="aditional_info_icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <path fill="currentColor" d="M527.95 224H480v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h385.057c28.068 0 54.135-14.733 68.599-38.84l67.453-112.464C588.24 264.812 565.285 224 527.95 224zM48 96h146.745l64 64H432c8.837 0 16 7.163 16 16v48H171.177c-28.068 0-54.135 14.733-68.599 38.84L32 380.47V112c0-8.837 7.163-16 16-16zm493.695 184.232l-67.479 112.464A47.997 47.997 0 0 1 433.057 416H44.823l82.017-136.696A48 48 0 0 1 168 256h359.975c12.437 0 20.119 13.568 13.72 24.232z"></path>
      </svg>
      <p class="aditional_info_txt">
        <?php
        $categories = get_the_category();
        foreach($categories as $category) {
          echo '<span>'. $category->cat_name .'</span>' . '<span class="category_comma">' . ',&nbsp;' . '</span>';
        }
        ?>
      </p>
    </div>
    <div class="aditional_info_item">
      <p class="aditional_info_txt"><?php echo get_comments_number() ?> comments</p>
    </div>
  </div>
  <div class="aditional_info_deco"></div>



  <section class="post_main">
    <?php the_content(); ?>
    <?php
    // Get current page URL
    $sb_url = urlencode(get_permalink());

    // Get current page title
    $sb_title = str_replace( ' ', '%20', get_the_title());

    // Construct sharing URL
    $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=Esfacildejarde';
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
    $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;
    ?>
    <ul id="share_content_links">
      <h4>Compartir</h4>
      <li>
        <a href="<?php echo $twitterURL; ?>" target="blank" rel="noopener noreferrer" id="shareTwitter">Twitter</a>
      </li>
      <li>
        <a href="<?php echo $facebookURL; ?>" target="blank" rel="noopener noreferrer" id="shareFacebook">Facebook</a>
      </li>
      <li>
        <a href="<?php echo $linkedInURL; ?>" target="blank" rel="noopener noreferrer" id="shareLinkedIn">Linkedin</a>
      </li>
    </ul>
  </section>

  <section class="post_comments">



      <div style=""><?php comments_template(); ?></div>





      <?php

      $fields   = array(
        'author' => '<p class="comment-form-author"><label for="author">' . __( 'Tu nombre' ) . ' <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required /></p>',
        'email'  => '<p class="comment-form-email" ><label for="email" >' . __( 'Tu mail  ' ) . ' <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required /></p>',
      );

      $args = array(
        'id_form'           => 'commentform',
        'class_form'        => 'comment-form',
        'id_submit'         => 'submit',
        'class_submit'      => 'submit',
        'name_submit'       => 'submit',
        'title_reply'       => __( 'deja tu comentario' ),
        'title_reply_to'    => __( 'respondele a %s' ),
        'cancel_reply_link' => __( 'Cancelar respuesta' ),
        'label_submit'      => __( 'Enviar' ),
        'format'            => 'xhtml',

        'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Tu comentario', 'noun' ) .
        '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
        '</textarea></p>',

        'must_log_in' => '<p class="must-log-in">' .
        sprintf(
          __( 'Para comentar debes <a href="%s">iniciar sesion</a>.' ),
          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
        ) . '</p>',

        'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
          __( 'Has iniciado sesion como: <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Cerrar la sesion?</a>' ),
          admin_url( 'profile.php' ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
        ) . '</p>',

        // 'comment_notes_before' => '<p class="comment-notes">' .
        // __( 'Tu e-mail no será publicado.' ) . ( $req ? $required_text : '' ) .
        // '</p>',

        'comment_notes_before' => '',
        'comment_notes_after'  => '',

        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
      );
      comment_form($args);
      ?>



  </section>

<?php } ?>


<?php get_footer(); ?>
