<?
include_once 'libs/Classes/Database.class.php';

//load files(templates) present inside _templates directory using file name
function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/gainfo/_templates/$name.php";
}

//get contents from config file
global $__site_config;
$__site_config_path="/home/rizwankendo/gainfo_config.json";
$__site_config=file_get_contents($__site_config_path);

//get specific array using key
function get_config($key){
    global $__site_config;
    
    //contents returned as associative array to $array
    $array=json_decode($__site_config,true);
    if(isset($array[$key])){
        return $array[$key];
    }
    else{
        return NULL;
    }
}
?>