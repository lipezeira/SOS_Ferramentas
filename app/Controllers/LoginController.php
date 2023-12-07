<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class LoginController extends Controller{

    public function login()
    {
       
        $this->view('login',['pagina' => 'Página de Login']);
    }

    public function autentica()
    {
        $houveErro = Validator::execute(Usuario::getLoginRegras(),$this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getListaErros(),'erro');
            redireciona('login');
        }

        $usuario = UsuariosDAO::getBy("login = ?",$this->post('login'));
        
        if($usuario &&  $usuario->autentica($this->post('senha'))){
            redireciona('home');
        }else{
            addFormData($this->post());
            flash('Usuário ou Senha Incorreta','erro');
            redireciona('login');
        }
        
    
    }

    public function criarconta()
    {

        
        $this->view('conta');
    }

    public function cadastrarconta()
    {
        if( mb_strlen($this->input('nome'))==0){
            echo "Nome não preenchido";
            die;

        }
        $usuario = new Usuario();
        $usuario->nome = $this->post('nome');
        $usuario->senha = $this->post('senha');

        var_dump($usuario);

        if(UsuariosDAO::inserir($usuario)){
         flash("Usuário {$usuario->nome} foi cadastrado com sucesso!");
         redireciona('login');
        }
    
    }

}