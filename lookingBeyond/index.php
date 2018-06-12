<?php
	require 'vendor/autoload.php';

	Slim\Slim::registerAutoloader();
	$app  = new \Slim\Slim();
	$candidato = new App\Controllers\ControllerCandidato();
	$vote = new App\Controllers\ControllerVote();
	$user = new App\Controllers\ControllerUser();

	$app->get('/tata', function(){
		echo "Página Inicial API";
	});

	$app->get('/', function(){
		global $candidato;
		$candidato->index();

	});

	$app->get('/vote', function(){
		global $vote;
		$vote->index();

	});
	$app->get('/vote/save', function() use($app){
		global $vote;
		$paramValue = $app->request->get('idCandidato');
		//$id = $app->request->post('idCandidato');
		// os dados poderiam vir de um $_POST
		//$id = substr($id, 6);
		$vote->votar($paramValue);
		$app->redirect('/lookingBeyond/index.php');
	});

	$app->get('/user/:id', function($id){
		global $user;
		$user_data = array(
			'id'  => $id
		);
		$user->query($user_data);
	});

	$app->run();
?>