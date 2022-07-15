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

    function video($file,$with,$text,$directo='lottie') {
        $file_pointer = "http://" . $_SERVER["HTTP_HOST"] . '/'.$_SESSION['url'].'/'.$directo.'/' . $file . '.mp4';
        $file_headers = @get_headers($file_pointer);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
             $file_pointer = "http://" . $_SERVER["HTTP_HOST"] . '/'.$_SESSION['url'].'/vendor/diegogfratini/sistemas/lottie/error.mp4';   
        } 
            return '<video loop autoplay="" width='.$with.' muted="" playsinline=""><source src='.$file_pointer.' style="margin: auto;" type="video/mp4"></video><br>'.$text;
    }
function animacion($file,$with,$text,$directo='lottie') {
        $file_pointer = "http://" . $_SERVER["HTTP_HOST"] . '/'.$_SESSION['url'].'/'.$directo.'/' . $file . '.json';
        $file_headers = @get_headers($file_pointer);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
          $file_pointer = "http://" . $_SERVER["HTTP_HOST"] . '/'.$_SESSION['url'].'/vendor/diegogfratini/sistemas/lottie/error.json';
        } 
        return '<lottie-player  autoplay loop mode="normal" style="width: '.$with.'px;margin: auto;" src="'.$file_pointer.'"></lottie-player><br>'.$text;
        
    }
}
