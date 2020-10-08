<?php 
	include_once "config.php";	
	include_once "conection.php";

	if (isset($_POST['action'])) {
		$userCtl = new UserController();
		switch($_POST['action']) {
			case 'store':
				$nombre = strip_tags($_POST['nombre']);
				$actividad = strip_tags($_POST['actividad']);
				$cantidad = strip_tags($_POST['cantidad']);
				$email = strip_tags($_POST['email']);
				
				$userCtl->store($nombre,$actividad,$cantidad,$email);
			break;
			case 'update':
				$nombre = strip_tags($_POST['nombre']);
				$actividad = strip_tags($_POST['actividad']);
				$cantidad = strip_tags($_POST['cantidad']);
				$email = strip_tags($_POST['email']);
				$id = strip_tags($_POST['id']);
				
				$userCtl->update($nombre,$actividad,$cantidad,$email,$id);
			break;
			case 'remove':
				$id = strip_tags($_POST['id']);
				
				 echo json_encode($userCtl->remove($id));
			break;
		}
	}

	class UserController{

		function get(){
			$conn = connect();
			if(!$conn->connect_error){

				$query = "select * from reservas";
				$prepared_query = $conn->prepare($query);
				$prepared_query->execute();

				$results = $prepared_query->get_result();
				$reservas = $results->fetch_all(MYSQLI_ASSOC);

				return $reservas;
			}else{
				return array();
			}
		}
		function store($nombre,$actividad,$cantidad,$email){
			$conn = connect();
			if (!$conn->connect_error){
				if($nombre!="" && $actividad!="" && $email!="" && $cantidad!=0){
					$query = "insert into reservas (nombre,actividad,cantidad,email) values (?,?,?,?)";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssis',$nombre,$actividad,$cantidad,$email);
				
					if($prepared_query->execute()){
						$_SESSION['message'] = "Registro creado exitosamente";
						$_SESSION['status'] = "Success";
						echo "bien";
						header("Location: ".$_SERVER['HTTP_REFERER']);
					}else{
						$_SESSION['message'] = "El registro no se pudo completar";
						$_SESSION['status'] = "error";
						header("Location: ".$_SERVER['HTTP_REFERER']);
						echo "mal";
					}
				} else {
					$_SESSION['message'] = "Verifique su informacion";
					$_SESSION['status'] = "error";		
					header("Location: ".$_SERVER['HTTP_REFERER']);
				}
			} else {
				$_SESSION['message'] = "Problemas con la conexion del servidor";
				$_SESSION['status'] = "error";
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
		}
		function update($nombre,$actividad,$cantidad,$email,$id){
			$conn = connect();
			if (!$conn->connect_error){
				if($nombre!="" && $actividad!="" && $email!="" && $cantidad!=0 && $id!=0){
					$query = "update reservas set nombre=?,actividad=?,cantidad=?,email=? where id =?";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssisi',$nombre,$actividad,$cantidad,$email,$id);
				
					if($prepared_query->execute()){
						$_SESSION['message'] = "Registro actualizado exitosamente";
						$_SESSION['status'] = "Success";
						echo "bien";
						header("Location: ".$_SERVER['HTTP_REFERER']);
					}else{
						$_SESSION['message'] = "El registro no se pudo actualizar";
						$_SESSION['status'] = "error";
						header("Location: ".$_SERVER['HTTP_REFERER']);
						echo "mal";
					}
				} else {
					$_SESSION['message'] = "Verifique su informacion";
					$_SESSION['status'] = "error";		
					header("Location: ".$_SERVER['HTTP_REFERER']);
				}
			} else {
				$_SESSION['message'] = "Problemas con la conexion del servidor";
				$_SESSION['status'] = "error";
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
		}
		function remove($id) {
			$conn = connect();
			if (!$conn->connect_error){
				if($id!=""){
					$query = "delete from reservas where id = ?";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('i',$id);

					if($prepared_query->execute()) {
						$response = array(
						"status"=> "success",
						"message"=> "Reservación eliminada.",
						);
						return $response;
					} else {
						$response = array(
						"status"=> "error",
						"message"=> "Ocurrio un error. Intenta más tarde.",
					);
					return $response;
					}
				} else {
					$response = array(
						"status"=> "error",
						"message"=> "Verifique su información",
					);
					return $response;
				}
			} else {
				$response = array(
						"status"=> "error",
						"message"=> "Problemas con la conexion del servidor",
					);
					return $response;
			}
		}
	}


?>