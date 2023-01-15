<?php

/**
 * Description of Routes
 *
 * @author Paulo
 */
class Routes {

    static function get_SiteMain() {
        $url = Main::SITE . '' . Main::SITE_PASTA;
        
        return $url;
        
    }
    
    static function get_Home() {
        return self::get_SiteMain().'/home.php';
    }
    
    static function get_Games() {
        return self::get_SiteMain().'/jogos.php';
    }
    
    static function get_Prog() {
        return self::get_SiteMain().'/prog.php';
    }

    
    static function redirect($tempo, $pagina) {
        $url = '<meta http-equiv="refresh" content="' . $tempo . '; url=' . $pagina . '">';
        echo $url;
    }
}
