<?php 

namespace app\site\controller;

class AboutController{
    public function __construct(){}
    
    public function index(){
        echo "Estamos na index!";
    }
    
    public function teste($name = null){
        echo $name . '<<<<<< TESTE!!!';
    }
}