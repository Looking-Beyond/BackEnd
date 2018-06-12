<?php

	namespace App\Models;

	use App\DataBase\DB;

	class ModelResultados{
		public function getData(){
			return DB::get('voto');
		}
	}
?>
