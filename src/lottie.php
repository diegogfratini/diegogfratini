<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lottie
 *
 * @author diego
 */
class lottie {
    
    
    public function __construct($file) {
        $file_pointer = '../lottie/'.$file.'.json';
        if (file_exists($file)) {
            return "The file $file_pointer exists";
        }else {
            return "The file $file_pointer does 
                                   not exists";
        }
    }
    
}
