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
        var_dump($_POST);
    
    }

}