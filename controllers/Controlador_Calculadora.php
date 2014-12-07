<?php
	include_once '../models/Modelo_Calculadora.php';
	$peso =$_REQUEST['peso'];
	$estatura =$_REQUEST['estatura'];
	$calculadora = new Modelo_Calculadora($peso,$estatura);
	if (($peso == 0) or ($estatura == 0)){
		echo "<script>";
		echo "if(confirm('El peso ni la estatura deben ser 0'));";  
		echo "window.location = '/imc/index.php';";
		echo "</script>"; 
	}
	if(!(is_numeric($peso))){
		echo "<script>";
		echo "if(confirm('Ingresaste un valor no numerico para el peso'));";  
		echo "window.location = '/imc/index.php';";
		echo "</script>"; 
	}
	if(!(is_numeric($estatura))){
		echo "<script>";
		echo "if(confirm('Ingresaste un valor no numerico para la estatura'));";  
		echo "window.location = '/imc/index.php';";
		echo "</script>"; 
	
	}else
	{		
	$imc= $calculadora->calcular();
	echo "<script>";
	echo "if(confirm('Tu IMC es: $imc'));";  
	echo "window.location = '/imc/index.php';";
	echo "</script>"; 	
	}
?>