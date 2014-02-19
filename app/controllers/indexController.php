<?php
	class Index extends Controller {

		public function __construct(){
			
		}

		public function index(){
			$db = new Produtos_Model();
			/*$db->insert('posts', array(
			'title' => 'Titulo Aqui',
			'text' => 'Conteudo Aqui',
			));*/
			$resultado = $db->read('posts','id=10');
			print_r($resultado);
		}

		public function novo(){

		}
	}
?>