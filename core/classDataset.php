<?php

require_once 'autoloader.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dataset extends Database{
    protected $sTable;
    protected $asFields;
    protected $abPrimary;
    
    function __construct(){
        $this->startDatabase();
    }
    
    public function selectAll(){
        $this->select_( $this->sTable, $this->asFields, [] );
    }
    
    public function select( array $asFields, array $asFilter ){
        $this->select_( $this->sTable, $this->asFields, $asFilter );
    }
    
}