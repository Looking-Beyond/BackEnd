<?php
	require 'vendor/autoload.php';

	Slim\Slim::registerAutoloader();
	$app  = new \Slim\Slim();
	$user = new App\Controllers\ControllerUser();


	$app->get('/', function(){
		global $user;
		$user->index();

	});

	$app->get('/', function(){
		global $user;
		// os dados poderiam vir de um $_POST
		$user_data = array(
			'name'  => 'Raphael',
			'email' => 'raphael@outlook.com'
		);
		$user->save($user_data);
	});

	$app->get('/', function($id){
		global $user;
		$user_data = array(
			'id'  => $id
		);
		$user->query($user_data);
	});

	$app->run();
?>