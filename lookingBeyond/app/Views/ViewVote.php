<?php
	namespace App\Views;

	class ViewVote{
		public function render($data){
			$dir      = './templates';
			$html     = 'vote.html';
			$loader   = new \Twig_Loader_Filesystem($dir);
			$twig     = new \Twig_Environment($loader, array('cache' => false));
			$template = $twig->loadTemplate($html);
			$values = array(
				'candidatos' => $data
			);
			echo $template->render($values);
		}
	}
?>