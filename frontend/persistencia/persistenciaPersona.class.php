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
				  $pass = md5($pass);

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

			public function registroUsu($obj, $conex){

					//Obtiene los datos del objeto $obj
				 $ci = $obj->getci();
				 $nom = $obj->getnombre();
				 $apell = $obj->getapellido();
				 $email = $obj->getemail();
				 $pais = $obj->getpais();
				 $pass = $obj->getcontrasena();
				 $pass = md5($pass);

//				 $tarj = $obj->gettarjeta();
//				 $cali = $obj->getcalificacion();
				 $calle = $obj->getcalle();
				 $num = $obj->getnumero();


					$sql = "select * from persona where nombre = :nombre or ci = :ci;";

					$consulta = $conex->prepare($sql);
					$consulta->execute( array(
																		':ci'	=> $ci,
																		':nombre' 		=> $nom
																	)
														);
					$resultado = $consulta->fetchAll();
					if(empty($resultado)){
						$sql = "INSERT INTO persona(ci, nombre, apellido, email, pais, contrasena, calle, numero, calificacion)
						 VALUES  (:ci,:nombre,:apellido,:email,:pais,:contrasena,:calle, :numero, 0);";

						$consulta = $conex->prepare($sql);
						$consulta->execute( array(
																			':ci' 		=> $ci,
																			':nombre' 		=> $nom,
																			':apellido' 		=> $apell,
																			':email'		=> $email,
																			':pais' 		=> $pais,
																			':contrasena'	=> $pass,
																			':calle' 		=> $calle,
																			':numero'		=> $num
																		)
															);

					if($consulta){
						return array(true,0);
					}else{
						return array(false,0);
						}

					}
					else{
						return array(false,1);
					}





			}

			function getFact($obj,$conex){
			$ci= trim($obj->getCi());

			$sql = "select sum(v.cantidad) as cantidad, sum(v.preciototal) as preciototal from vendecompra v, publicacion p, persona pe where pe.ci = v.cvendeipersona and v.idvendepublicacion = p.id and v.cvendeipersona = p.cipersona and pe.ci = v.cvendeipersona and v.cvendeipersona = :ci;";

			$consulta = $conex->prepare($sql);
			$consulta->execute(
												array(
																":ci" 		=> $ci
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

			function getFavs($obj,$conex){
				$ci = $obj->getCi();
				$sql = "select p.id as id, p.nombrepubli as nombre, p.precio as precio, p.stock as stock, p.fecha as fecha, p.categoria as categoria  from publicacion p, persona pe, favorito f where p.id=f.idfavpublicacion and pe.ci = f.cifavpersona and ci = :ci; ";
        $consulta = $conex->prepare($sql);
        $consulta->execute(array(
                                  ":ci" => $ci
                                )
                            );
        $resultado=$consulta->fetchAll();
				$var = count($resultado);
				$resultado1 = array();
				if(!empty($resultado[0])){
					for($i = 0; $i < $var; $i++){
						$sql = "select pe.nombre from publicacion p, persona pe where pe.ci = p.cipersona and p.id = :id;";
						$consulta = $conex->prepare($sql);
						$consulta->execute(array(
																			":id" => $resultado[$i]['id']
																		)
																);
						$res = $consulta->fetchAll();
						$resultado1[0][$i]= $res[0]['nombre'];
					}
				}
        return array($resultado,$resultado1);


			}

			function getCompr($obj,$conex){
				$ci = $obj->getCi();
				$sql = "select p.nombrepubli as nombre,
								p.categoria as categoria,
								v.preciototal as precio,
								v.total as total,
								p.id as id, calificacion,
								v.fecha as fecha,
								v.preciototal as precio FROM vendecompra v, publicacion p WHERE idvendepublicacion = p.id and cvendeipersona != p.cipersona and cvendeipersona =
								:ci;";
        $consulta = $conex->prepare($sql);
        $consulta->execute(array(
                                  ":ci" => $ci
                                )
                            );
        $resultado=$consulta->fetchAll();
				$var = count($resultado);
				$resultado1 = array();
				if(!empty($resultado[0])){
					for($i = 0; $i < $var; $i++){
						$sql = "select pe.nombre from publicacion p, persona pe where pe.ci = p.cipersona and p.id = :id;";
						$consulta = $conex->prepare($sql);
						$consulta->execute(array(
																			":id" => $resultado[$i]['id']
																		)
																);
						$res = $consulta->fetchAll();
						$resultado1[0][$i]= $res[0]['nombre'];
					}
				}
        return array($resultado,$resultado1);


			}


			function getVenta($obj,$conex){
					$ci = $obj->getCi();
					$sql = "select p.nombrepubli as nombre,
									p.categoria as categoria,
									v.preciototal as precio,
									v.total as total,
									p.id as id, calificacion,
									v.fecha as fecha,
									v.preciototal as precio FROM vendecompra v, publicacion p WHERE idvendepublicacion = p.id and cvendeipersona = p.cipersona and cvendeipersona =
									:ci;";
	        $consulta = $conex->prepare($sql);
	        $consulta->execute(array(
	                                  ":ci" => $ci
	                                )
	                            );
	        $resultado=$consulta->fetchAll();
	        return $resultado;
				}

			function getPregCompr($obj,$conex){
				$ci = $obj->getCi();
				$sql = "select p.id as id, p.nombrepubli as nombrepubli, p.precio as precio, p.categoria as categoria, p.fecha as fecha, c.comentario from publicacion p, comentariopublicacion c where p.id = c.idcompublicacion and c.cicompersona = :ci and p.cipersona != :ci;";
        $consulta = $conex->prepare($sql);
        $consulta->execute(array(
                                  ":ci" => $ci
                                )
                            );
        $resultado=$consulta->fetchAll();
				$var = count($resultado);
				$resultado1 = array();
				if(!empty($resultado[0])){
					for($i = 0; $i < $var; $i++){
						$sql = "select pe.nombre from publicacion p, persona pe where p.cipersona = pe.ci and p.id = :id;";
						$consulta = $conex->prepare($sql);
						$consulta->execute(array(
																			":id" => $resultado[$i]['id']
																		)
																);
						$res = $consulta->fetchAll();
						$resultado1[0][$i]= $res[0]['nombre'];
					}
				}
        return array($resultado,$resultado1);
			}

			function getPregVenta($obj,$conex){
				$ci = $obj->getCi();
				$sql = "select id, nombrepubli, precio, categoria, fecha from publicacion where cipersona = :ci;";
				$consulta = $conex->prepare($sql);
				$consulta->execute(array(
																	":ci" => $ci
																)
														);
				$resultado=$consulta->fetchAll();
				$var = count($resultado);
				$resultado1 = array();
				if(!empty($resultado[0])){
					for($i = 0; $i < $var; $i++){
						$sql = "select comentario from comentariopublicacion where idcompublicacion = :id and cicompersona != :ci;";
						$consulta = $conex->prepare($sql);
						$consulta->execute(array(
																			":id" => $resultado[$i]['id'],
																			":ci" => $ci
																		)
																);
						$res = $consulta->fetchAll();
						$cont = count($res);
						for($j = 0; $j < $cont; $j++){
							$resultado1[$i][$j]= $res[$j]['comentario'];
					  }
					}
				}
				return array($resultado,$resultado1);
			}
	}

?>
