<?php
require 'Class.inc.php';
$error = false;
$fields = array( 'name', 'email', 'subject', 'message' );

foreach ( $fields as $field ) {
	if ( empty( $_POST[$field] ) || trim( $_POST[$field] ) == '' )
		$error = true;
}

if ( ! $error ) {
	$name = stripslashes( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$subject = stripslashes( $_POST['subject'] );
	$message = stripslashes( $_POST['message'] );
	$mail = new mail();
	$mail_status=$mail->send($email, $subject, $message);

	if ($mail_status) {
		echo "Success";
	} else {
		echo "Error";
	}
}
?>