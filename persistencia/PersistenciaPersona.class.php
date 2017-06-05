<?php
Require_once ('../logica/funciones.php'); //donde se conecta a la base
sessionCheck();

	class persistenciaPersona{

	function agregar($obj,$conex){
				$ci = $obj->getci();
	      $nom = $obj->getnombre();
	      $apell = $obj->getapellido();
	      $email = $obj->getemail();
	      $pais = $obj->getpais();
	      $tarj = $obj->gettarjeta();
	      $cali = $obj->getcalificacion();
	      $calle = $obj->getcalle();
	      $num = $obj->getnumero();
	      $tel = $obj->gettelefono();
	      $cont = $obj->getcontrasena();

				//CONSULTA SQL
				$sql = "select nombre,contrasena from persona where (nombre=:nombre and contrasena=:contrasena)";

				//VARIABLES PARA SQL "PREPARE" ES UNA FUNCION PDO, ES UNA FUNCION DEFINIDA

				$consulta = $conex->prepare($sql);																			//DEFINIMOS LA CONSULTA, Y LA PREPARAMOS
				$consulta->execute(array(':nombre'=>$nom,':contrasena'=>$cont));

				//echo $consulta;
				if($consulta){
					return true;
				}else{
					return false;
					}
			}

			public function entrarusu($obj, $conex){

	        //Obtiene los datos del objeto $obj
	        $nom= trim($obj->getnombre());
	        $pass= trim($obj->getcontrasena());

	        $sql = "select * from persona where nombre=:nombre and contrasena=:contrasena";

	        $consulta = $conex->prepare($sql);
					$consulta->execute(
														array(
																		":nombre" 		=> $nom,
					 													":contrasena" => $pass
																	)
														);

				/*Despues de ejecutar la consulta como es un SELECT debo utilizar el m�todo
				fetchAll que devuelve un array que contiene todas las filas del conjunto de resultados
				*/

					$result = $consulta->fetchAll();
					$_SESSION['ci'] = $result[0]['ci'];
				//Devuelvo el array que puede tener un registro o estar vacio si el usuario y contrase�a no coinciden
				//print_r($result);
					return $result;
	    }

			function getFact($obj,$conex){
			$ci= trim($obj->getCi());

			$sql = "select SUM(cantidad) as cantidad,SUM(preciototal) as preciototal from vendecompra v, publicacion p where v.idvendepublicacion = p.id and v.cvendeipersona = :ciPersona and p.cipersona = :ciPersona;";

			$consulta = $conex->prepare($sql);
			$consulta->execute(
												array(
																":ciPersona" 		=> $ci
															)
												);
			$result = $consulta->fetchAll();
			return $result;

			}

			function getRep($obj,$conex){
			$ci= trim($obj->getCi());

			$sql = "select calificacion from vendecompra v, publicacion p where v.idvendepublicacion = p.id and v.cvendeipersona = :ciPersona and p.cipersona = :ciPersona;";

			$consulta = $conex->prepare($sql);
			$consulta->execute(
												array(
																":ciPersona" 		=> $ci
															)
												);
			$result = $consulta->fetchAll();
			return $result;

			}
	}

?>
