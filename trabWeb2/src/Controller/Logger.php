<?php
namespace QI\trabWeb2\Controller;

class Logger{
    private function __construct(){}

    public static function writeLog($log){
        $dir_path = dirname(dirname(__DIR__)). "/logs/";
        if(!is_dir($dir_path)){
            mkdir($dir_path);
        }

        $file_path = $dir_path . date("Y-m-d H-i-s") . ".log";
        $file = fopen($file_path, "W");
        fwrite($file, $log);
        fclose($file);
    }

}