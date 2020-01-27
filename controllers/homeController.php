<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

        $u = new usuarios();

        if(!$u->isLogged()) {
        	header("Location:login");
        } 

    }

    public function index() {
        $dados = array(
            'nome'=>''
        );

        $u = new usuarios($_SESSION['twlg']);  
        $dados['nome'] = $u->getNome();  
        $dados['qt_seguidos'] = $u->countSeguidos();
        $dados['qt_seguidores'] =  $u->countSeguidores();
        $dados['sugestao'] = $u->getUsuarios(5);

        

        $this->loadTemplate('home', $dados);
        //$this->loadView('home', $dados);
    }

    public function seguir($id){
        if(!empty($id)) {

            $id =  addslashes($id);

            $sql = "SELECT * FROM usuarios WHERE id = '$id'";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {

                $r = new relacionamentos();
                $r->seguir($_SESSION['twlg'], $id);
            }   
        }  

        header("Location:/PHP_B7WEB/Twitter_Clone");       
    }

    public function deseguir($id){
        if(!empty($id)) {

            $id =  addslashes($id);

            $sql = "SELECT * FROM usuarios WHERE id = '$id'";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {

                $r = new relacionamentos();
                $r->deseguir($_SESSION['twlg'], $id);
            }   
        }  

        header("Location:/PHP_B7WEB/Twitter_Clone");       
    }

}