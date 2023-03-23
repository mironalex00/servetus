<?php 
    #   BLOQUE TRY-CATCH
    try{
        #
        include_once('config.php');
        #   SE INCLUYE HEADER
        require_once($views. 'header.php');
        #   SE REQUIERE EL ARCHIVO
        require_once($required);
        #   SE INCLUYE EL FOOTER
        require_once($views . 'footer.php');
    }catch(Exception $e){
        #   SI HAY EXCEPCION SE MATA SCRIPT
        die("El servidor ahora no puede atender su petición: {$e->getMessage()}");
    }
?>