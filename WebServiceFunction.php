<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebServiceFunction
 *
 * @author LinCY
 */
class WebServiceFunction {
    public function HelloWorld(){
        return 'HelloWorld!';
    }
    
    public function AddNumber($num1, $num2){
        return $num1 + $num2;
    }
}
