<?php
	namespace App\Views;

	class ViewCandidato{
		public function render($data){
			$dir      = './templates';
			$html     = 'candidatos.html';
			$loader   = new \Twig_Loader_Filesystem($dir);
			$twig     = new \Twig_Environment($loader, array('cache' => false));
			$template = $twig->loadTemplate($html);
			$values = array(
				'title' => 'Usuários',
				'candidatos' => $data
			);
			echo $template->render($values);
		}
	}
?>