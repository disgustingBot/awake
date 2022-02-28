<?php



add_action( 'comment_form', 'captcha_display' );
function captcha_display() {
	echo <<<CAPTCHA_FORM
  <style type='text/css'>#submit{display:none}</style>

  <input class="token" type="hidden" name="token" value="">
  <div class="btn main_form_btn" onclick="send_comment_xD()" value="Submit">Enviar</div>
  CAPTCHA_FORM;
}




add_action(        'admin_post_tp_comment_handler', 'tp_comment_handler');
add_action( 'admin_post_nopriv_tp_comment_handler', 'tp_comment_handler');
function tp_comment_handler() {
	$debugMode = false;
	$respuesta = array();

  // var_dump($_POST);

  $link=$_POST['link'];

	if($_POST['a00'] != ""){
		$link = add_query_arg( array('status' => 'no',), $link );
    // $status = 'no';
	} else {


		$site = '6Lc_FccaAAAAAI3tlaOosytKvo86fA7kl4wtdCg0';
		$scrt = '6Lc_FccaAAAAAMaWOApx9W52zcPcanREP-_o_K8t';

    $token = $_POST['token'];
		// get validation from google
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array(
		  'secret'   => $scrt,
		  'response' => $token,
		  'remoteip' => $_SERVER['REMOTE_ADDR']
		));
		// save response in a variable
		$boring_google_response = json_decode(curl_exec($ch));
		curl_close($ch);
		// end of get validation

    if ($boring_google_response->success) {
			if ( wp_handle_comment_submission( wp_unslash( $_POST ) ) ) {
				$link = add_query_arg( array( 'status' => 'sent' , ), $link );
        // $comment = wp_handle_comment_submission( wp_unslash( $_POST ) );

                  		// // get validation from google
                  		// $ch = curl_init();
                  		// curl_setopt($ch, CURLOPT_URL, site_url() . '/wp-comments-post.php');
                      // curl_setopt($ch, CURLOPT_HEADER, 0);
                  		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                      // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  		// curl_setopt($ch, CURLOPT_POST, 1);
                  		// curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
                  		// curl_exec($ch);


        // $status = 'sent';
			} else {
				$link = add_query_arg( array( 'status' => 'error', ), $link );
        // $status = 'error';
			}
    } else {
			$link = add_query_arg( array( 'status' => 'bot' , ), $link );

      // $status = 'bot';
    }
	}
	wp_redirect($link);
  // var_dump($link);



  // function redirect_comment( $location, $comment ) {
  //   $location = add_query_arg( array('status' => $status, ), $location );
  //   return $location;
  // }
  // add_filter( 'comment_post_redirect', 'redirect_comment' );


	// if($debugMode){echo wp_json_encode($respuesta);}
	exit();
}
