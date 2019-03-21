<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$asDirs = [];

function loadDirs(){

    global $asDirs;
    $sLocation = $_SERVER["DOCUMENT_ROOT"]."/curso-php-11088";
    
    $asDirs = [ "core"      => "$sLocation/core/",       // Core classes
                "deploy"    => "$sLocation/deploy/",
                "crud"      => "$sLocation/crud/",
                "customers" => "$sLocation/crud/customers/",
                "products"  => "$sLocation/crud/products/",
                "suppliers" => "$sLocation/crud/suppliers/", ];

//    $asDirModules = scandir( $asDirs[ "crud"] );
//
//    unset( $asDirModules[0] ); /* unset '.' */
//    unset( $asDirModules[1] ); /* unset '..' */
//
//    foreach ( $asDirModules as $sDirModule )
//    {
//       $sPath = $asDirs[ "crud"]."$sDirModule/";
//       if ( is_dir( $sPath ) )
//       {
//          $asDirs[ "crud/$sDirModule"] = $sPath;
//       } // foreach ( $asDirModules as $sDirModule )
//    } // foreach ( $asDirModules as $sDirModule )
}

// private function loadDirs()

function loader( $sClassName ){
    global $asDirs;
    /*
     * Looping through each directory to load all the class files.
     * It will only require a file once.
     */
    foreach ( $asDirs as $sDir ){
        $sFile = $sDir."class$sClassName.php";
        if ( file_exists( $sFile ) ){
            require_once( $sFile );
            return true;
        } // if ( file_exists( $sDir."class$sClassName.php" ) )
    } // foreach( $asDirs as $sDir )
    return false;
} // private function loader( $sClassName )

function newObject( $sClass ){
    loadDirs();
    if ( loader( $sClass ) )
        return new $sClass;
    else
        return false;
}

loadDirs();
spl_autoload_register( "loader" );

//$dbData = new Database();