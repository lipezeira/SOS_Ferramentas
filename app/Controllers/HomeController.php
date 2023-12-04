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
        $usuario->email = "Astrogildo@ifba.edu.br";
        $usuario->senha =  "Astrogildo122";

        UsuariosDAO::inserir( $usuario );
    }

    #pesquisa de Todos
    public function teste2(){
          
            $usuario = UsuariosDAO::getALL();

            foreach($usuario as $usu){
                echo $usu->email;
                echo "<hr>";
            }
        }

    #pesquisa individual
    public function teste3(){
        $usuario = UsuariosDAO::getById(19);
        echo "<pre>";
        var_dump($usuario);
    }

    #Atualizar informações de usuario
    public function teste4(){
        $usuario = UsuariosDAO::getById(19);
        
        $usuario->email = "astrogildo_of@ifba.edu.br";
        $usuario->senha = "astrogildo64";

        UsuariosDAO::editar($usuario);

        echo "<pre>";
        var_dump($usuario);
    }

    #deletar informações de usuario
    public function teste5(){
        $usuario = UsuariosDAO::getById(19);
        if($usuario){
            UsuariosDAO::excluir($usuario);
            echo "Usuário Excluído com Sucesso!";
        }else{
            echo "Usuário Não Existe!";
        }
    }

    public function teste6(){
        $usuario = new Usuario(
        [
            'email'=> 'Julia@ifba.edu.br',
            'senha'=> 'julia1234'
        ]
    );
        echo "<pre>";
        var_dump($usuario->getProps());
    }
}

