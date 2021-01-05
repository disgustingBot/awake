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
?>
