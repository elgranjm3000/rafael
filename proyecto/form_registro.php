<?php
	require 'procedures/procedures.php';
	session_start();
	$codigo = 2222;	
	$email = $_SESSION['email'];
	$clave = $_SESSION['clave'];
	
	$generardatos = array();
	if($_POST['codigo']  != $_SESSION['p_Codigo_Validacion']){
		$asunto['error'] = "codigo";
		echo json_encode($generardatos);
		exit;
	}


	$procedures = new Procedures; 
	$element = 'aMemberVar'; 
	
	$sql = "CALL CT_AFI_PR_REGISTRA_USUARIO('$email','$clave', @p2, @p3, @p4)";


	$registrar =  $procedures->CT_AFI_PR_REGISTRA_USUARIO($sql);

	if ($registrar == "OK"){
		$asunto['error'] = true;
	}else{
		$asunto['error'] = false;
	}

	$generardatos = $asunto;
	echo json_encode($generardatos);

?>