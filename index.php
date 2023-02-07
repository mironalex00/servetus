<?php include('./views/header.php')?>
<?php
    #   OBTENEMOS LA ULTIMA PARTE DE LA URL, ESTA INDICARÁ QUE RECURSO VAMOS A PEDIR
    $url = substr($_SERVER['REQUEST_URI'], strlen(preg_replace("/\/(?:.(?!\/))+$/im", '', $_SERVER['SCRIPT_NAME'])) + 1);
    #   SE GUARDA EN VARIABLE DIRECTORIO DE VISTAS
    $views = __DIR__ . '/views';
    #   SE GUARDA EN VARIABLE EL DIRECTORIO BASE DE LA URL
    $basename = basename($url);
    #   FILTRO QUE PASARÁ LOS ARCHIVOS
    $skip = Array ( 'header', 'footer' );
    #  SE GUARDA EN VARIABLE EL ARCHIVO A REQUERIR (BASE)
    $required = $views . DIRECTORY_SEPARATOR . 'home.php';
    #   SE CREA UN ITERADOR RECURSIVO QUE RECORRERÁ TODOS LOS ARCHIVOS RECURSIVAMENTE DESDE VIEWS
    $recDirIterator = new RecursiveDirectoryIterator($views);
    //  POR CADA ARCHIVO
    foreach(new RecursiveIteratorIterator($recDirIterator) as $file){
        #   SI ES DIRECTORIO SE PASA
        if(is_dir($file)) continue;
        #   SI NO ESTÁ DENTRO DEL FILTRO
        if (!in_array(strtolower( $file->getBasename('.php') ), $skip)){
            #   SI EL BASENAME DEL ARCHIVO PHP RECORRIDO COINCIDE
            if(strtolower( $file->getBasename('.php') ) === strtolower( $basename )){
                #   SE SOBRESCRIBE EL VALOR
                $required = $file;
                #   SE TERMINA DE RECORRER
                break;
            }
        }
    }
    require_once($required);
?>
<?php include('./views/footer.php')?>