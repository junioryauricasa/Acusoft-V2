﻿<?php

 include("conexion.php");
 
if(isset($_POST['codigo']) && !empty($_POST['codigo']))




{
	 global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "a6381931_root";
    $elPw  = "jdelgado911015";
    $elServer ="mysql6.000webhost.com";
    $laBd = "a6381931_acusoft";
	
	
	//Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error("Error al conectar el Host"));
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error("Problema al conectar la base de datos"));
	
	
	$codigo=$_POST['codigo'];
	
	
	
	$registro = mysql_query("SELECT * FROM estudiantes WHERE codigo = '$codigo'",$conexio) or die ("Problema al realizar la consulta: ".mysql_error());
	
   
   if ($reg=mysql_fetch_array($registro))
	
	{
		mysql_query("DELETE FROM estudiantes WHERE codigo = '$codigo'",$conexio) or die ("Problema al realizar la consulta: ".mysql_error());
		
	
	
	
	
	
	?> 

<style type="text/css">
.NEGRITA {
	text-align: center;
	color: #F00;
	font-weight: bold;
}
.centrado .NEGRITA .tamaño .azul .NEGRITA {
	color: #00F;
}
</style>


<p>&nbsp;</p>
<p class="NEGRITA">INFORMACION</p>
<p>&nbsp;</p>
<p class="tamaño">El siguiente registro fue eliminado</p>
<p>&nbsp;</p>



               <?php 
			  
		echo "CODIGO   =  ".$reg['codigo']."<BR>";
		echo "NOMBRE   =  ".$reg['nombre']."<BR>";
		echo "APELLIDO =  ".$reg['apellido']."<BR>";
		echo "EDAD     =  ".$reg['edad']."<BR>";
		echo "ESTATURA =  ".$reg['estatura']."<BR>";
		echo "PESO     =  ".$reg['peso']."<BR>";
		echo "GRUPO    =  ".$reg['grupo']."<BR><BR>";
		
		
		?>
        
        
<p><a href="eliminar_registro.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver a Atras</span></span></span></span></a></p>


			  <?php 
	
		
		}
	


	}else
	
	{
		
		?> 

<style type="text/css">
.NEGRITA {
	text-align: center;
	color: #F00;
	font-weight: bold;
}
.centrado .NEGRITA .tamaño .azul .NEGRITA {
	color: #00F;
}
</style>


<p>&nbsp;</p>
<p class="NEGRITA">Error!!</p>
<p>&nbsp;</p>
<p class="tamaño">Por favor diligencie correctamente la informacion e intente nuevamente.</p>
<p>&nbsp;</p>
<p><a href="eliminar_registro.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver a intentar</span></span></span></span></a></p>


               



			  <?php 
		
		
		
		
		
		
		
		
		
		
	

	}


?>