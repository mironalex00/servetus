<?php 
    #
    require_once('config.php');
    #   SE INCLUYE HEADER
    include('./views/header.php');
    #   OBTENEMOS LA ULTIMA PARTE DE LA URL, ESTA INDICARÁ QUE RECURSO VAMOS A PEDIR
    $baseUrl = substr($_SERVER['REQUEST_URI'], strlen(preg_replace("/\/(?:.(?!\/))+$/im", '', $_SERVER['SCRIPT_NAME'])) + 1);
    #   SI CONTIENE SLASH AL FINAL DE LA RUTA
    if(str_ends_with($baseUrl, '/')){
        #   SE SOBREESCRIBE ELIMINANDO ESTE ULTIMO CARÁCTER
        $baseUrl = preg_replace("/\/(?!\/)+$/im", '', $baseUrl);
    }
    #   SE GUARDA EN VARIABLE DIRECTORIO DE VISTAS
    $views = __DIR__ . DIRECTORY_SEPARATOR . 'views'. DIRECTORY_SEPARATOR;
    #   FILTRO QUE PASARÁ LOS ARCHIVOS
    $skip = Array ( 'header', 'footer' );
    #  SE GUARDA EN VARIABLE EL ARCHIVO A REQUERIR (BASE)
    $required = $views . 'home.php';
    #   SE CREA UN ITERADOR RECURSIVO QUE RECORRERÁ TODOS LOS ARCHIVOS RECURSIVAMENTE DESDE VIEWS
    $recDirIterator = new RecursiveDirectoryIterator($views);
    #   POR CADA ARCHIVO
    foreach(new RecursiveIteratorIterator($recDirIterator) as $file){
        #   SI ES DIRECTORIO SE PASA
        if(is_dir($file)) continue;
        #   SI ES INDEX SE SALE
        if(strlen($baseUrl) === 0) break;
        #   SI NO ESTÁ DENTRO DEL FILTRO
        if (!in_array(strtolower( $file->getBasename('.php') ), $skip)){
            #   SE GUARDA LA PATH
            $basename = $file->getRealPath();
            #   SE REEMPLAZAN CON BACKSLASH
            $expected = preg_replace("~\\/~mD", '\\', $baseUrl) . '.php';
            #   SI EL BASENAME DEL ARCHIVO PHP RECORRIDO COINCIDE
            if(str_ends_with($basename, $expected)){
                #   SE SOBRESCRIBE EL VALOR
                $required = $file->getRealPath();
                #   SE TERMINA DE RECORRER
                break;
            }
        }
    }
    #   SE REQUIERE EL ARCHIVO
    require_once($required);
    #   SE INCLUYE EL FOOTER
    include('./views/footer.php');
?>