<?
include_once 'libs/Classes/Database.class.php';

global $__site_config;
$__site_config_path="/home/rizwankendo/gainfo_config.json";
$__site_config=file_get_contents($__site_config_path);

function get_config($key){
    global $__site_config;
    $array=json_decode($__site_config,true);
    if(isset($array[$key])){
        return $array[$key];
    }
    else{
        return NULL;
    }
}
?>