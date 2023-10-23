<?php

namespace App;

class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__,"autoload"));
    }

    static function autoload($class){
        $class = 'Banque\CompteCourant';

        __NAMESPACE__ .'Banque\CompteCourant'. $class;

        





        

    }
}