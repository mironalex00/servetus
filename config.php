<?php
    #   
    function get_path(){
        $path = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        if(!isset($_SERVER['HTTP_REFERER']) || isset($_SERVER['HTTP_REFERER'])) $_SERVER['HTTP_REFERER'] = $path;
        return preg_replace('/.\w+(\.[^\/.]+).+/', '', $path);
    }
    function get_params() {
        $path = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        if(!isset($_SERVER['HTTP_REFERER']) || isset($_SERVER['HTTP_REFERER'])) $_SERVER['HTTP_REFERER'] = $path;
        return preg_replace('/.+\w+(\.[^\/.]+)./m', '', $path);
    }
    #   
    ini_set('display_errors','Off');
    #  
    $lang = 'es';
    #   
    $setup = json_decode(file_get_contents("./demo/data_$lang.json"));
    #   
    DEFINE('R_DIR', __DIR__ . DIRECTORY_SEPARATOR);
    DEFINE('HOST', get_path() . DIRECTORY_SEPARATOR);
    #   
    $setup->project->directories = json_decode(json_encode(array(
        'paths' => array(
            'assets' => array(
                'base' => HOST . 'assets' . DIRECTORY_SEPARATOR,
                'css' => HOST . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR,
                'img' => HOST . 'assets' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR,
                'js' => HOST . 'assets' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR
            ),
            'views' => array ( 
                'base' => R_DIR . 'views' . DIRECTORY_SEPARATOR,
                'hiring' => R_DIR . 'views' . DIRECTORY_SEPARATOR  . 'hiring' . DIRECTORY_SEPARATOR,
                'service' => R_DIR . 'views' . DIRECTORY_SEPARATOR  . 'service' . DIRECTORY_SEPARATOR,
            )
        )
    )));
    #   
    $views = $setup->project->directories->paths->views->base;
    #   FILTRO QUE PASARÁ LOS ARCHIVOS
    $skip = Array ( 'header', 'footer' );
    #   
    $required = trim(get_params());
    #   
    if(strlen($required) === 0) $required = "home";
    if($required === "home" || $required === "index") $required = "home";
    if(!file_exists($views . $required . ".php")) $required = "home";
    #   
    $baseUrl = explode(",", preg_replace('/\/(\w+)/', ',$1', $required));
    #   
    $required = $views . $required . ".php";
    #   
    $section =& $setup->data;
    #   
    foreach($baseUrl as $key){
        #   
        if(is_numeric($key)){
            $section =& $section[intval($key) - 1];
        }else{
            $section =& $section->{$key};
        }
    }
    # 
    $header = $setup->data->header->texts;
    $header->logo = $setup->project->directories->paths->assets->img . $setup->project->meta->logo->icon;
    #
    $section = $section->texts;
    #
    $footer = $setup->data->footer->texts;
    $footer->logo = $setup->project->directories->paths->assets->img . $setup->project->meta->logo->img;
    #   
    if(!is_null(error_get_last())) {
        var_dump(error_get_last());
        throw new Exception("Sucedió un error desconodido");
    }
?>