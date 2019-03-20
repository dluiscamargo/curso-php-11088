<?php
require_once '../../core/classDataset.php';

 class Products extends Dataset{
     private  $sTable;
     private  $asFields;
     private  $abPrimary;
     
//   ["ProductId"=> true ] ++ é auto-increment
//   ["CustomerId"=> false] não é auto-increment
     
    function __construct() {
        $this->sTable = "Product";
        $this->asFields = [
            "ProductId",
            "ProductName",
            "SupplierId",
            "CategoryId",
            "UnitPrice",
            "UnitsInStock" ];
        $this->abPrimary = [ "ProductId" => true];
    }
    
    public function selectAll() {
        
    }
    
    public function select( array $asFields, array $asFilter ) {
        
    }
 }
