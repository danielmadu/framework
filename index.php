<?php
	
	function __autoload($file){
		require_once 'app/models/'.$file.'.php';
	}

	//Incluíndo classes básicas do framework
	require_once 'system/config.php';
	require_once 'system/controller.php';
	require_once 'system/model.php';
	

	//Tratando os parametros passados via url
	$_GET['key'] = (isset($_GET['key']) ? $_GET['key'].'/' : 'index/index');
	$key = $_GET['key'];
	$separator = explode('/',$key);
	$controller = $separator[0];
	$action = ($separator[1] == null ? 'index' : $separator[1]);
	
			
	//Executando Actions requisitadas
	require_once 'app/controllers/'.$controller.'Controller.php';
	$app = new $controller();
	$app->$action();
	

?>