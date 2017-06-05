<?php

Require_once ('../logica/funciones.php');

	class Persistenciaadministrador{

	function agregar($obj,$conex){
			$idadministrador = $obj->getidadministrador();
			$grado = $obj->getgrado();
			
			//CONSULTA SQL
			$sql = "insert into administrador (ciadministrador,grado) values (:idadministrador,:grado);";

			//VARIABLES PARA SQL "PREPARE" ES UNA FUNCION PDO, ES UNA FUNCION DEFINIDA

			$consulta = $conex->prepare($sql);																			//DEFINIMOS LA CONSULTA, Y LA PREPARAMOS
			$consulta->execute(array(':idadministrador'=>$idadministrador, ':grado'=>$grado));

			if($consulta){
				return true;
			}else{
				return false;
				}
			}

		}
?>
