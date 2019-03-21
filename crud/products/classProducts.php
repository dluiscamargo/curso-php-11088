<?php

require_once '../../core/autoloader.php';

class Products extends Dataset{    
    function __construct(){
        parent::__construct();
        
        $this->sTable   =  "products";
        $this->asFields = [ 
           "ProductId",
           "ProductName",
           "SupplierId", 
           "CategoryId",
           "UnitPrice",
           "UnitsInStock" ];
        
        $this->abPrimary = [ "ProductId" => true ];
    } // function __construct(){    
} // class Products extends Dataset{

