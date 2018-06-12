<?php
	namespace App\Controllers;

	use App\Models;
	use App\Views;

	class ControllerVote{
		public function index(){
			$modelVote = new Models\ModelVote();
			$viewVote  = new Views\ViewVote();
			$viewVote->render($modelVote->getData());
		}
		public function votar($data){
			$modelVote = new Models\ModelVote();
			$modelVote->votar($data);
		}
	}
?>