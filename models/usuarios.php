<?php
class usuarios extends model
{
	public function isLogged() {
		if(isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])) {
			return true;
		} else {
			return false;
		}
	}	

	public function usuarioExiste($email){
		$sql = "SELECT * FROM usuarios WHERE email = '$email' ";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			return true;
		} else {
			return false;
		}
	}

	public function inserirUsuario($nome,$email,$senha){
		$sql = $this->db->prepare("INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,:senha)") ;
		$sql->bindValue(":nome",$nome);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",$senha);

		$sql->execute();

		$id = $this->db->lastInsertId();

		return $id;

	}

	public function fazerLogin($email, $senha) {

		$sql= "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);
	
		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$_SESSION['twlg'] = $sql['id'];
			return true;

		} else {
			return false;
		}

	}
}