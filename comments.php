<?php
//Get only the approved comments
// echo get_the_ID();
$args = array(
    'status' => 'approve',
    'post_id' => get_the_ID(),

);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
?><div><?php
if ( $comments ) {
  foreach ( $comments as $comment ) {
    //var_dump($comment);
    echo '
    <div class="comment_block">
      <p class="comment_author">'  . $comment->comment_author . '  </p>
      <p class="comment_content">' . $comment->comment_content . ' </p>
    </div>';

  }
} else {
  echo 'No comments found.';
}
?></div><?php

    $fields   = array(
      'token'  => '<input class="token" type="hidden" name="token" value="">',
      'author' => '<input class="comment-form-author comment_form_input" id="author" placeholder="Tu nombre" name="author" type="text" value="" size="30" maxlength="245" required />',
      'email'  => '<input class="comment-form-email comment_form_input" id="email" placeholder="Tu email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required />',
      'sumit_btn' => '<div class="Submit main_form_btn btn" onclick="send_comment_xD()">Enviar</div>',
    );
    $args = array(
      'id_form'           => 'commentform',
      'class_form'        => 'comment_form_2',
      'id_submit'         => 'submit',
      'class_submit'      => 'submit main_form_btn btn',
      'name_submit'       => 'submit',
      'title_reply'       => __( '' ),
      'title_reply_to'    => __( 'respondele a %s' ),
      'cancel_reply_link' => __( 'Cancelar respuesta' ),
      'label_submit'      => __( 'Enviar' ),
      'format'            => 'xhtml',

      'comment_field' =>  '<textarea class="comment_textarea comment_form_input" placeholder="Deja un comentario..." name="comment" cols="45" rows="8" aria-required="true"></textarea>'.
      '<input type="hidden" name="link"     value="'.home_url( $wp->request ).'">'.
      '<input type="hidden" name="action"   value="tp_comment_handler">'.
      '<input type="text"   name="a00"      value="" placeholder="jeje" hidden>',

      'must_log_in' => '<p class="must-log-in">' .
      sprintf(
        __( 'Para comentar debes <a href="%s">iniciar sesion</a>.' ),
        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
      ) . '</p>',

      'logged_in_as' => '<p class="logged-in-as">' .
      sprintf(
        __( 'Estás comentando como: %2$s. <a href="%3$s" title="Cerrar sesion">Cerrar la sesion?</a>' ),
        admin_url( 'profile.php' ),
        $user_identity,
        wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
      ) . '</p>',

      // 'comment_notes_before' => '<p class="comment-notes">' .
      // __( 'Tu e-mail no será publicado.' ) . ( $req ? $required_text : '' ) .
      // '</p>',

      // 'comment_notes_before' => '',
      // 'comment_notes_after'  => '',

      'fields' => apply_filters( 'comment_form_default_fields', $fields ),
      // 'action'   => esc_url( admin_url('admin-post.php') ),
    );
    comment_form($args);

?>
<style type='text/css'>#submit{display:none}</style>
