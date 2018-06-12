<?php

	namespace App\Models;

	use App\DataBase\DB;

	class ModelCandidato{
		public function getData(){
			return DB::get('candidato');
		}
	}
?>