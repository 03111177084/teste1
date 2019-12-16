<?php

include_once("model/Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke($acao = 'home') {
        $reslt = $this->model->getLogin();
        // Chama a funcao getLogin() da classe Model
        // e armazena o valor de retorno dessa funcao
        // na variavel reslt.
        switch ($acao) {
case 'vamo dale sor':
$this->funcao1();
break;
            case 'home':
                $this->showConteudoInicialView();
                break;
            case 'login':
                $this->showTelaLoginView();
                break;
            case 'logout':
                $this->showTelaDeLogoutView();
                break;
        }
    }
    
    private function showConteudoInicialView(){
        include 'view/conteudoInicialView.php';
    }
    
    private function showTelaLoginView(){
        include 'view/telaLoginView.php';
    }
    
    private function showTelaDeLogoutView(){
        $custom = "ahahahaFIZALTERAÇÃOAQUI"; //mysql_
        include 'view/telaLogoutView.php';
    }
    private function funcao1(){
$custom = "dale dale";
include 'view/telaLogoutView.php;
}
    
}

?>
