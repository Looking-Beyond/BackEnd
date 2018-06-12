<?php
	namespace App\Controllers;

	use App\Models;
	use App\Views;

	class ControllerCandidato{
		public function index(){
			$modelCandidato = new Models\ModelCandidato();
			$viewCandidato  = new Views\ViewCandidato();
			$viewCandidato->render($modelCandidato->getData());
		}
	}
?>