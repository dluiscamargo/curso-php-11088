<?php

require_once '../../core/config.php';

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
    
    public function selectByCategory($iCategoryId) {
        
    }
    
    public function selectBySupplier($iSupplierId) {
        
    }
} // class Products extends Dataset{

