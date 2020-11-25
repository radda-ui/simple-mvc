<?php 
namespace mvc\core;

/**
 * 
 */
class Responce{
    
    function setResponsecode(int $code){
        http_response_code($code);
    }
    
}