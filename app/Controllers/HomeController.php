<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;
use SosFerramentas\Models\DAO\UsuariosDAO;
use SosFerramentas\Models\Entities\Usuario;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Página inicial - SOS Ferramentas'];
        $this->view('inicial', $dados);
    }

    public function teste(){
        $usuario = new Usuario;
        $usuario->email = "Luan@ifba.edu.br";
        $usuario->senha =  "Luan000";

        $DAO = new UsuariosDAO();
        $DAO->inserir( $usuario );
    }

    #pesquisa de Todos
    public function teste2(){
            $DAO = new UsuariosDAO();
            $usuario = $DAO->getALL();

            foreach($usuario as $usu){
                echo $usu->email;
                echo "<hr>";
            }
        }

    #pesquisa individual
    public function teste3(){
        $DAO = new UsuariosDAO();
        $usuario = $DAO->getById(15);
        echo "<pre>";
        var_dump($usuario);
    }

    #Atualizar informações de usuario
    public function teste4(){
        $DAO = new UsuariosDAO();
        $usuario = $DAO->getById(15);
        
        $usuario->email = "thiago@ifba.edu.br";
        $usuario->senha = "thiago123";

        $DAO->editar($usuario);

        echo "<pre>";
        var_dump($usuario);
    }

    #deletar informações de usuario
    public function teste5(){
        $DAO = new UsuariosDAO();
        $usuario = $DAO->getById(9);
        if($usuario){
            $DAO->excluir($usuario);
            echo "Usuário Excluído com Sucesso!";
        }else{
            echo "Usuário Não Existe!";
        }
    }
}

