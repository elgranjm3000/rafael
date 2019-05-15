<?php
require 'procedures/procedures.php';
$procedures = new Procedures; 
$busqueda = strtoupper($_GET["busqueda"]);
$generardatos = array();
$data = array();


$sql = "SELECT Ciudad FROM CT_GEO_CIUDAD where Ciudad like '".$busqueda."%' ORDER BY CIUDAD LIMIT 10 ";

$ciudad =  $procedures->sql($sql);

while($row = mysqli_fetch_array($ciudad)){ 	
	
    array_push($data,array("id"=>utf8_decode($row[0]),"name"=>utf8_decode($row[0])));        
 }
echo json_encode($data);

?>