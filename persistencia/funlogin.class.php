<?php
	Require_once("../logica/funciones.php");
	Require_once("../presentacion/index.html");
	Require_once("../clases/persona.php");

class logIn{
		function getLogInResult($obj,$conex){

			$nom = $obj->getnombre();																					//llamamos al nombre de usuario del objeto usuario
			$cont = $obj->getcontrasena();																				//llamamos a la contraseña del objeto usuario
			$cont = md5($pass);																							//Encriptamos la contraseña
			$mensaje=array();																							//CREAMOS EL ARRAY DE MENSAJES PARA ERRORES

			$sql =	"select nombre, contrasena, correo, ci from Persona where (nombre= :nombre and contrasena= :contrasena)";

			$resultado = $conex->prepare($sql);																			//DEFINIMOS LA CONSULTA, Y LA PREPARAMOS
			$resultado = $consulta->execute(array(':nombre' => $nom, ':contrasena' => $cont));							//SE HACE LA CONSULTA EN BASE AL STRING DE CONEIÓN Y AL STRING DE CONSULTA

			if($consulta){
				return true;
			}else{
				return false;
				}
			}

			/*
			if(!$resultado){																							//SI HUBO UN ERROR, EL RESULTADO DE LA FUNCION execute() DARÁ FALSE, POR LO TANTO !$res SERÁ TRUE EN CASO DE ERROR, CON ESTA ESTRUCTURA CONTROLAMOS LOS ERRORES Y DEVOLVEMOS AL USUARIO A LA PÁGINA ANTERIOR
				$mensaje[]="Combinación de usuario y contraseña no encontrados :(";							//CUANDO NO SE ENCUENTRA NI USUARIO NI CONTRASEÑA O UNO DE LOS DOS
				desconectar($conex);
				return array(false,$mensaje,'');																		//DEVOLVEMOS AL USUARIO AL FORMULARIO LOGIN
			}
			elseif($resultado){																	//PUESTO QUE EN ESTE SELECT SOLO VIENE UN RESULTADO SI O SI, SOLO REVISAMOS SI LA VARIABLE ESTA DEFINIDA O NO
																								//LA VARIABLE RESULTADO, VA A DAR TRUE O FALSE, DEPENDIENDO DE SI SE PUDO EJECUTAR LA CONSULTA O NO, Y EL OBJETO CONSULTA, VA A GUARDAR EL RESULTADO DE LA CONSULTA QUE SE HIZO.
				$_SESSION['msgLogIn']="Bienvenido " . $logi . "";						//SI SE DAN TODOS LOS EVENTOS ANTERIORES, PREPARAOS UN MENSAJE DE BIENVENIDA
				if($resultado['perfil'] == 1){															//REVISAMOS EL TIPO DE USUARIO, ES DECIR, SI ES ADMINISTRADOR O USUARIO NORMAL
					$_SESSION['tipUsr'] = 1;														//TIPO DE USUARIO 1 ES ADMIN
					$_SESSION['correo'] = $resultado['correo'];
					$_SESSION['ci'] = $resultado['ci'];
				}
				else{
					$_SESSION['tipUsr'] = 2;														//TPO DE USUARIO 2 ES KHEPRI
				}


				$_SESSION['logged'] = true;
				$tipUsr = $_SESSION['tipUsr'];
				desconectar($conex);
				return array(true,$mensaje,$tipUsr);
				*/
			/*
		}

		function logInCheck($nom,$contrasena){
		//checkSession();
		$conex = conectar();
		$objUsr = new persona();
		$objUsr->setName($nom);
		$objUsr->setcontrasena($contrasena);

		header("Location: http://localhost/ignacioclase(modificado)/presentacion/index.html");			//ESTO ENVIA AL USUARIO A LA PÁGINA MAIN MENU
			die();																				//HACE QUE SE DETENGA EL PROCESAMIENTO EN ESTE SECTOR
	}
	*/
	?>
