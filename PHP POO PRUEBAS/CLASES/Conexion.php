<?php 

class Conexion {

	private $hostname;
	private $db;
	private $user;
	private $password ;

	private $con;


	function __construct(){
		$this->hostname = "localhost";
		$this->db = "tb_crud";
		$this->user = "root";
		$this->password= "";
		$this->con = null;
	}



	public function conectar(){
	 	if ($this->con == null) {
	 		$this->con = new mysqli($this->hostname,$this->user,$this->password,$this->db);
	 		if ($this->con->connect_errno) {
	 			printf("Ha habido un error en la conexion = ".$this->con->connect_error);
	 			return false;
	 		}
	 		else {
	 			//aqui entra si la conexion fue exitosa!
	 			return true;
	 		}
	 	}
	 	else{
	 		return false;
	 	}
	 	
	}

	public function desconectar(){
		if ($this->con != null) {
			mysqli_close($this->con);
			$this->con = null;
		}
	}

	public function getConnection(){
		return $this->con;
	}	
}





 ?>