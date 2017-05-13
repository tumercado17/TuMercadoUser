<?php
require_once("../logica/sesiones.php");
require_once('funciones.php');
require_once('../presentacion/formularios.php');
require_once('../clases/Usuario.class.php');
echo "<script type='text/javascript' src='../jscript/funcionesGenerales.js'></script>";


$nombre= strip_tags($_POST['NombreUsu']);
$apellido= strip_tags($_POST['ApellidoUsu']);
$categoria= strip_tags($_POST['CategoriaUsu']);
$horario= strip_tags($_POST['Horario']);
$cedula= strip_tags($_POST['Cedula']);
$correo= strip_tags($_POST['Correo']);
$celular= strip_tags($_POST['Celular']);
$boton= strip_tags($_POST['QueBoton']);
$oid_usuario=strip_tags($_POST['IdUsu']);
$fecNac=strip_tags($_POST['FecNac']);
$modo=strip_tags($_POST['Modo']);

$mensaje="";
$ejecucionOK=true;


//Se conecta a la base
$conex = conectar();
if ($modo == "ALTA")
{
	$login= strip_tags($_POST['Login']);
	$password= strip_tags($_POST['Password']);
	//Se crea un objeto con los datos de los cuadros de texto del formulario
	$u = new Usuario('',$login,$password,$nombre,$apellido,$categoria,$cedula,$correo,$celular,$horario,$fecNac);
	$ejecucionOK=$u->alta($conex);
	if ($ejecucionOK)
	{
			?>
				 <script type="text/javascript">
		 
						window.alert("Los datos de Usuario del Sist. se ingresaron correctamente.");
						location.href="../presentacion/cargamenu.php";
				</script>
			<?php

	}
	else
	{
			?>
				 <script type="text/javascript">
		 
						window.alert("Error al ingresar los datos de Usuario.");
		
				</script>
			<?php
   
	} 
}
else
{
	if ($modo == "MOD") {
		$idUsu= trim(strip_tags($_POST['IdUsu']));
		$u = new Usuario($idUsu,'','',$nombre,$apellido,$categoria,$cedula,$correo,$celular,$horario,$fecNac);
		$ejecucionOK=$u->modificacion($conex);
		if ($ejecucionOK)
		{
			?>
				 <script type="text/javascript">
		 
						window.alert("Los datos de Usuario del Sist. se modificaron correctamente.");
						location.href="../presentacion/cargamenu.php";
				</script>
			<?php
		
		}
		else
		{
			?>
				 <script type="text/javascript">
		 
						window.alert("Error al modificar los datos de Usuario.");
		
				</script>
			<?php
   
		} 
		
	}
	else 
	{
		if ($modo == "DEL") {
			$idUsu= trim(strip_tags($_POST['IdUsu']));
			$u = new Usuario($idUsu);
			$ejecucionOK=$u->baja($conex);
			if ($ejecucionOK)
			{
			?>
				 <script type="text/javascript">
		 
						window.alert("Los datos de Usuario se eliminaron correctamente.");
						location.href="../presentacion/cargamenu.php";
				</script>
			<?php
		
			}
			else
			{
				?>
					 <script type="text/javascript">
			 
							window.alert("Error al eliminar los datos de Usuario.");
			
					</script>
				<?php
   
			} 
		}
	}
}
//Desconectar de la base de datos
desconectar($conex);


?>
