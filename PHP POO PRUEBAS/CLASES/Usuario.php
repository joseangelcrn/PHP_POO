<?php 
	
	/**
	 * 
	 */
	class Usuario{
		
		private $id ;
		private $nombre;
		private $apellidos;
		private $email;
		private $password;
		private $pais;
		private $fecha_nacimiento;
		private $fecha_registro;

		function __construct($id,$nombre,$apellidos,$email,$password,$pais,$fecha_nacimiento,$fecha_registro){
			$this->id = $id;
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->email = $email;
			$this->password = $password;
			$this->pais = $pais;
			$this->fecha_nacimiento = $fecha_nacimiento;
			$this->fecha_registro = $fecha_registro;
		}

		// SETTERS

		public function setId($value){
			$this->id = $value;
		}

		public function setNombre($value){
			$this->id = $value;
		}

		public function setApellidos($value){
			$this->id = $value;
		}

		public function setEmail($value){
			$this->id = $value;
		}

		public function setPassword($value){
			$this->id = $value;
		}

		public function setPais($value){
			$this->id = $value;
		}

		public function setFechaNacimiento($value){
			$this->id = $value;
		}

		public function setFechaRegistro($value){
			$this->id = $value;
		}

		//GETTERS
		
		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getApellidos(){
			return $this->apellidos;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getPais(){
			return $this->pais;
		}

		public function getFechaNacimiento(){
			return $this->fecha_nacimiento;
		}

		public function getFechaRegistro(){
			return $this->fecha_registro;
		}


		public function print(){
			echo 'ID = '. $this->getId();
			echo '<br>';
			echo 'Nombre = '. $this->getNombre();
			echo '<br>';
			echo 'Apellidos = '. $this->getApellidos();
			echo '<br>';
			echo 'Email = '. $this->getEmail();
			echo '<br>';
			echo 'Password = '. $this->getPassword();
			echo '<br>';
			echo 'Fecha nacimiento = '. $this->getFechaNacimiento();
			echo '<br>';
			echo 'Pais = '. $this->getPais();
			echo '<br>';
			echo 'Fecha refistro = '. $this->getFechaRegistro();
			echo '<br>';
		}


	}


// $usuario = new Usuario(1,"jose angel","cabeza rodriguez-navas","jose@gmail.com","jejejepassword","1995-04-24","España","2016-01-01");

// $usuario->print();

 ?>