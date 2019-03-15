<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function buildDropdownMenu( string $sId, string $sTitle, array $asLinks ) : string{
    
    $htmlMenu = "<li id=\"li{$sId}_dropdown\" class=\"nav-item dropdown\">
    <a id=\"a{$sId}_toggle\"
       class=\"nav-link dropdown-toggle\"
       href=\"#\"
       data-toggle=\"dropdown\">$sTitle</a>
    <ul id=\"ul{$sId}_dropdown_menu\" class=\"dropdown-menu\">";
    
    $iCount = count( $asLinks );
    // PARA CADA ELEMENTO NO ARRAY $asLinks FAÇA
    for ( $i = 0; $i < $iCount; $i++ ){
        $sHref = $asLinks[ $i ][ "href" ];
        $sTarget = $asLinks[ $i ][ "target" ];
        $sCaption = $asLinks[ $i ][ "caption" ];
        $sLink = "<a href=\"$sHref\" target=\"$sTarget\" >$sCaption</a>";
        
        $htmlMenu = $htmlMenu."<li>$sLink</li>";
    } // for ( $i = 0; $i < $iCount; $i++ ){
    
    $htmlMenu .= "</ul></li>";
    
    return $htmlMenu;
} // function buildDropdownMenu( $sId, $sTitle, $asLinks ) : string{

?>






