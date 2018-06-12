<?php

	namespace App\Models;

	use App\DataBase\DB;

	class ModelUser{
		public function getData(){
			return DB::get('php_users');
		}
		public function saveData($data){
			return DB::save('php_users', $data);
		}
		public function query($data){
			return DB::sql("SELECT * FROM candidato WHERE idCandidato = :id", array('id' => $data['id']));
		}
	}
?>