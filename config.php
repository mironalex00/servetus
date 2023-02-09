<?php
    #  
    $lang = 'es';
    #   
    $json = json_decode(file_get_contents("./demo/data_$lang.json"));
    #
    $data = $json->data;
    #   
    $url = dirname($_SERVER['SCRIPT_NAME']);
    if(strcmp($url, PATH_SEPARATOR) === 1) {
        $url = null;
    }
?>