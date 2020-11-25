<?php 
namespace mvc\core;

if(!defined("ROOT")) define('ROOT', dirname(dirname(dirname(__FILE__))));

final class Config{
    private array $data;
    function __construct(){}

    public static function getConfig($section=null){

        if(!$section) return ($this->data !== []) ? $this->data : self::getData(); 
        else 
        return ($this->data !== []) ? $this->data[$section] : self::getData()[$section] ;
    }
    private static function getData(){
        $this->data=parse_ini_file(ROOT.'/config/config.ini');
        return $this->data;
    }
}