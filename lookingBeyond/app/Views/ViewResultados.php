<?php
	namespace App\Views;

	class ViewResultados{
		public function render($data){
			$dir      = './templates';
			$html     = 'resultados.html';
			$loader   = new \Twig_Loader_Filesystem($dir);
			$twig     = new \Twig_Environment($loader, array('cache' => false));
			$template = $twig->loadTemplate($html);
			$values = array(
				'votos' => $data
			);
			echo $template->render($values);
		}
	}
?>
