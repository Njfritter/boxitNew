<?php
	require_once('./stripePHP/init.php');
	$stripe = array(
	// granted, let's start with TEST keys first !
		// input secret stripe API key below
		'secret_key'		=> '',
		// input publishable stripe API key below
		'publishable_key' 	=> ''
		);
	\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
