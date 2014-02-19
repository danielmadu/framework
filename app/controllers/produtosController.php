<?php
	class Produtos extends Controller {
		
		public function index(){
			$this->view('produtosNovos');
		}

		public function novo(){
			$this->view('produtosNovos');
		}
	}
?>