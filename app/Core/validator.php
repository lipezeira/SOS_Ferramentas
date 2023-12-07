<?php

namespace SosFerramentas\Core;

class Validator{

    protected static bool $houveerro = false;
    protected static array $msg = [];

    public static function execute(array $regrasValidacao, array $valores){
        foreach($regrasValidacao as $campo => $regras)
        {
            $listaregras = explode("|",$regras);
            $valor = $valores[$campo] ?? null;
            $parametros = [$valor,$campo];

            foreach($listaregras as $regra){
                if(method_exists(__CLASS__,$regra)){
                    call_user_func_array([__CLASS__,$regra],$parametros);
                }
            }
        }
        return static::$houveerro;
    }

    protected static function obrigatorio($valor,$nomecampo){
        $valor= trim($valor);
        if(strlen($valor) == 0){
            static::$houveerro = true;
            static::$msg[] = "O {$nomecampo} é obrigatório e não foi preenchido";
        }
    }

    protected static function email($valor,$nomecampo){
        if(! filter_var($valor,FILTER_VALIDATE_EMAIL)){
            static::$houveerro = true;
            static::$msg[] = "O {$nomecampo} precisa ser um email válido";
        }
    }

    public function getErros():array{
        return static::$msg;
    }
}