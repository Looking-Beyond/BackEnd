<?php
	namespace App\Controllers;

	use App\Models;
	use App\Views;

	class ControllerResultados{
		public function index(){
			$modelResultados = new Models\ModelResultados();
			$viewResultados  = new Views\ViewResultados();
			$viewResultados->render($modelResultados->getData());
		}
	}
?>
