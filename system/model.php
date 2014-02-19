<?php
	class Model {
		protected $db;
		public function __construct()
		{
			
			$this->db = new PDO('mysql:host=localhost;dbname=blog;','root','');

		}
		/*
		 * @param String $tabela
		 * @param Array $dados
		 * */
		public function insert($tabela, Array $dados){
			
			foreach ($dados as $key => $value) {
				//$campos[] = $key."='".$value."'";
				$campos[] = $key;
				$valores[] = $value;
				
			}
			
			//$campos = implode(', ', $campos);
			$campos = implode(', ', $campos);
			$valores = "'".implode("','", $valores)."'";
			
			return $this->db->query("INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})");
			//return print_r($tabela); 
		}
		
		public function read($tabela, $where = null){
			$where = ($where != null ? "WHERE {$where}" : '');
			$q = $this->db->query("SELECT * FROM {$tabela} {$where}");
			$q->setFetchMode(PDO::FETCH_ASSOC);
			return $q->fetchAll();
		}
		
		public function update(){
			
		}
		
		public function delete(){
			
		}
	}
?>