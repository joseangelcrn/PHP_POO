<?php 
	include_once 'Conexion.php';
	include_once 'Usuario.php';
	
	class UsuarioHandler{

		private $conexion = null;

		public function __construct(){
			
			$this->conexion = new Conexion();    
		}


		public function getTodos(){
			$this->conexion->conectar();
			
			if ($this->conexion != null) {
				
				$query  = "SELECT * FROM usuarios";
				
				$result = $this->conexion->getConnection()->query($query);
				 
				if ($result) {
					$usuarios =  array();
					while ($row = mysqli_fetch_assoc($result)) {
						array_push($usuarios, $row);
					}
					//aqui desconectaria la conexion
					$this->conexion->desconectar();
					return $usuarios;
				}
			}
			else{
				return null;
			}

		}


		public function insertar($usuario){
			 if (get_class($usuario) === "Usuario") {
				$this->conexion->conectar();
				if ($this->conexion != null) {
						
				$sql = "INSERT INTO usuarios(nombre,apellidos,email,password,fecha_nacimiento,pais,fecha_registro) 
						VALUES(
						'".$usuario->getNombre()."',
						'".$usuario->getApellidos()."',
						'".$usuario->getEmail()."',
						'".$usuario->getPassword()."',
						'".$usuario->getFechaNacimiento()."',
						'".$usuario->getPais()."',
						'".$usuario->getFechaRegistro()."'
					);";
					$result = $this->conexion->getConnection()->query($sql);

					
					if ($result) {
						return $usuario;
					} else {
						return null;
					}


				} else {
					echo 'HUBO UN ERROR EN LA CONEXION DESDE  \'INSERTAR USUARIOS\'';
				}

			 } else {
				return null;
			 }
		}



		public function getById($id){
			if (is_numeric($id)) {
				$this->conexion->conectar();
				if ($this->conexion != null) {
					$sql = "SELECT * FROM usuarios WHERE id = $id";

					$result = $this->conexion->getConnection()->query($sql);

					if ($result) {
						
						while ($row = mysqli_fetch_assoc($result)) {
							$usuario = $row;
						}
						return $usuario;
					}

					else{
						return null;
					}
				}
			}
			else{
				return null;
			}
		}

		public function deleteById($id){
			if (is_numeric($id)) {
				$this->conexion->conectar();
				if ($this->conexion != null) {
					$sql = "DELETE FROM usuarios WHERE id = $id";

					$result = $this->conexion->getConnection()->query($sql);

					if ($result) {
						
						return true;
					}

					else{
						return null;
					}
				}
			}
			else{
				return null;
			}
		}

		public function findLikeApellidos($apellidos){
			$this->conexion->conectar();

			if ($this->conexion != null) {
				$sql = "SELECT * FROM usuarios WHERE apellidos LIKE'%{$apellidos}%'";

				$result = $this->conexion->getConnection()->query($sql);

				if ($result) {
					$usuarios = array();

					while ($row = mysqli_fetch_assoc($result)) {
						array_push($usuarios, $row);
					}
					return $usuarios;


				}
				else{
					return null;
				}

			}
		}
	


	}


	 // $uh = new UsuarioHandler();
	
	 // $todosLosusuarios = $uh->getTodos();

		
		
		//$usuarios =  $uh->findLikeApellidos("apellidos");

		//var_dump($usuarios);
	// // $var = new Usuario(0,"jose","apellidos","dddfgfg@asdasd.com","passwosdfrd","españa",'1434-04-03','2000-01-01');
	 
	// //  $result =  $uh->insertar($var);

	// var_dump($result);


	// $usuario = $uh->getById(18);

	 //var_dump($usuario);
	

 ?>