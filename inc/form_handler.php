<?php


add_action(        'admin_post_tp_form_handler', 'tp_form_handler');
add_action( 'admin_post_nopriv_tp_form_handler', 'tp_form_handler');
function tp_form_handler() {
	$debugMode = false;
	$respuesta = array();


  $link=$_POST['link'];

	if($_POST['a00'] != ""){
		$link = add_query_arg( array('no' => 'go',), $link );
	} else {
		$subject = 'Nuevo mensaje';
		$message='';

		$ignore_this_keys = array('a00', 'action', 'link', 'status', 'submit', 'g-recaptcha-response', 'token');
    foreach ($_POST as $key => $value) {
      // if ( $key != 'a00' && $key != 'action' && $key != 'link' && $key != 'status' && $key != 'submit' && $key != 'g-recaptcha-response' ) {
      // }
			if (!in_array($key, $ignore_this_keys)) {
				$message.='<strong>'.$key.':</strong> '.$value.' - <br>';
				// echo "BB is not found";
			}
    }

    $headers = array('Content-Type: text/html; charset=UTF-8');



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
		  'secret' => $scrt,
		  'response' => $token,
		  'remoteip' => $_SERVER['REMOTE_ADDR']
		));
		// save response in a variable
		$boring_google_response = json_decode(curl_exec($ch));
		curl_close($ch);
		// end of get validation

    if ($boring_google_response->success) {
			if (wp_mail( get_option('contact_form_to'), $subject , $message , $headers )) {
				$link = add_query_arg( array( 'status' => 'sent' , ), $link );
			} else {
				$link = add_query_arg( array( 'status' => 'error', ), $link );
			}
    } else {
			$link = add_query_arg( array( 'status' => 'bot' , ), $link );
    }
	}
	wp_redirect($link);
	// if($debugMode){echo wp_json_encode($respuesta);}
	exit();
}
