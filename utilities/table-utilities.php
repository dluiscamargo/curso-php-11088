<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function createTable( $sTitle, array $asArrayInfo ){
    $htmlArrayInfo = "<table class=\"table table-striped\">";

    $htmlArrayInfo .= "<thead>";
    $htmlArrayInfo .= "<tr>";
    $htmlArrayInfo .= "<th colspan=\"2\">$sTitle</th>";
    $htmlArrayInfo .= "</tr>";
    $htmlArrayInfo .= "<tr>";
    $htmlArrayInfo .= "<th>CHAVE</th>";
    $htmlArrayInfo .= "<th>VALOR</th>";
    $htmlArrayInfo .= "</tr>";
    $htmlArrayInfo .= "</thead>"; 

    $htmlArrayInfo .= "<tbody>";
    foreach( $asArrayInfo as $sIndex => $sValue ){
        $htmlArrayInfo .= "<tr>";
        $htmlArrayInfo .= "<td>$sIndex</td>";
        $htmlArrayInfo .= "<td>$sValue</td>";
        $htmlArrayInfo .= "</tr>";
    } // foreach( $_SERVER as $sIndex => $sValue ){
    $htmlArrayInfo .= "</tbody>";

    $htmlArrayInfo .= "</table>"; 
    
    return $htmlArrayInfo;
} // function createTable( array $asArrayInfo ){

