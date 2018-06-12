<?php

	namespace App\Models;

	use App\DataBase\DB;

	class ModelVote{
		public function getData(){
			return DB::get('candidato');
		}
		public function votar($idCandidato){
			return DB::votar($idCandidato);
		}
	}
?>