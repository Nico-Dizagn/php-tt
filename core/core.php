<?php
/**
 * Framework TinyMVC
 * 
 * @link https://www.siaxperience.com
 * @author N.Namont 2022
 * 
 */
class tinyMVC{
    
    const COMPONENT_PATH='../component/'; 

    private static $m_oInstance; 


    /**
     * Design Pattern #1
     */
    private function __construct(){}

    /**
     * Design Pattern #1
     */
    public static function instance(){        
        if (TRUE == isset(self::$m_oInstance)){
            return self::$m_oInstance ;
        } 
        return self::$m_oInstance = new tinyMVC() ;
    }

    /**
     * Who Run The World ? 
     */
    public function run(){
        try{
            $l_sRoute = $this->route() ;
            $l_sComponent = self::COMPONENT_PATH.$l_sRoute.'.php' ;
            if(TRUE == file_exists($l_sComponent)){
                include_once($l_sComponent) ;
                $l_oInstance = new $l_sRoute() ;
                echo $l_oInstance;
            }
        }
        catch( Exception $e){
            var_dump($e) ;
        }
    }

    /**
     * 
     */
    private function route(){
        //
        $l_sRoute = 'index' ;
        //
        parse_str( $_SERVER['QUERY_STRING'] , $l_aQuery ) ;
        // 
        if(TRUE == isset($l_aQuery['route']) && 1 === preg_match('&^[a-zA-Z]*$&', $l_aQuery['route'])){
            $l_sRoute = $l_aQuery['route'] ;
        }
        return $l_sRoute ;        
    }

}