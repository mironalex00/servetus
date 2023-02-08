<?php
    #  
    $lang = 'es';
    #   
    $json = json_decode(file_get_contents("./demo/data_$lang.json"));
    #
    $data = $json->data;
?>