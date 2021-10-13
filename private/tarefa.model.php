<?php 
class Tarefa{
    //metodos privados 
    private $id;
    private $id_status;
    private $tarefas;
    private $data_cadastro;

    //metodos publicos
    public function __get($atributo){
            return $this->$atributo;
            
    }

    public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;

    }



}





