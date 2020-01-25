<?php
class loginController extends controller {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
        $dados = array();

        if(isset($_POST['email']) && !empty($_POST['email'])){

    		$email = addslashes($_POST['email']);
    		$senha = md5($_POST['senha']);

    		$u = new usuarios();

    		if($u->fazerLogin($email, $senha)) {
    			
    			header("Location: /PHP_B7WEB/Twitter_Clone");

    		} else {
    			echo "login não efetuado! Confira sua usuário ou senha";
    		}
        }

       
        $this->loadView('login', $dados);
    }

    public function cadastro() {

    	$dados = array('aviso'=>"");

    	if(isset($_POST['nome']) && !empty($_POST['nome'])){

    		$nome = addslashes($_POST['nome']);
    		$email = addslashes($_POST['email']);
    		$senha = md5($_POST['senha']);

    		if(!empty($nome) && !empty($email) && !empty($senha)) {

    			$u = new usuarios();

    			if(!$u->UsuarioExiste($email)){

    			 $_SESSION['twlg'] = $u->inserirUsuario($nome, $email, $senha); // ao cadastrar , o usuario já loga
    			 header("Location:/PHP_B7WEB/Twitter_Clone"); // 

    			} else {
    				$dados['aviso'] = "E-mail já utilizado! Favor faça login ou cadastre outro e-mail";
    			}

    		} else {
    			$dados['aviso'] = "Preencha todos os campos";
    		}

    	}

    	$this->loadView('cadastro', $dados);

    }

    public function sair() {
    	unset($_SESSION['twlg']);
    	header("Location: /PHP_B7WEB/Twitter_Clone");
    }

}