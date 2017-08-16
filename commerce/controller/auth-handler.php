<?php 
	
	session_start();
	include('api.php');

	$post = [

		'email' => $_POST['email'],
		'password' => $_POST['password']
	];
	
	$url = $base_url.'commerce/login';

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

	$response = curl_exec($curl);

	curl_close($curl);

	$decode = json_decode($response, true);

	$code = $decode['code'];

	

	if($code == 200){

		$_SESSION['loggedin'] = true;

		//user data
		$_SESSION['id_info_user_commerce'] = $decode['data']['id_info_user_commerce'];

	    $_SESSION['id_commerce'] = $decode['data']['id_commerce'];

	    $_SESSION['id_rol_commerce'] = $decode['data']['id_rol_commerce '];

	    $_SESSION['name'] = $decode['data']['name'];

	    $_SESSION['last_name'] = $decode['data']['last_name '];

	    $_SESSION['phone'] = $decode['data']['phone'];

	    $_SESSION['email'] = $decode['data']['email'];

	    $_SESSION['rfc'] = $decode['data']['rfc'];

	    $_SESSION['password'] = $decode['data']['password'];

	    $_SESSION['token'] = $decode['data']['token'];

		print true;

	}

	print false;
	//$resp = json_decode($curl_response, true);

 ?>