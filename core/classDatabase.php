<?php
class Database{
    private  $sDriver = "MYSQL";
    private  $sHost = "localhost";
    private  $iPort = 3306;
    private  $sUser = "root";
    private  $sPass = "";
    private  $sDatabase = "northwind";
    private  $dbConn = null;
    private  $sStatus = "";
    private  $bStatus= false;
    private  $vQueryResult = false;

    public function __construct (){
        //TODO:CARREGAR INFORMAÇÕES DE ACESSO AO BANCO DE DADOS APARTIR DE UMA ARQUIVO
    }
    
    public function __destruct() {
        if($this->dbConn){
            switch ($this->sDriver){
                case "POSTGRESQL":
                    break;
                case "MYSQL":
                default :
                    mysqli_close($this->dbConn);
            }
        }
    }
    
    public function starDatabase() : bool{
        switch ($this->sDriver){
            case "POSTGRESQL":
                break;
            case "MYSQL":
            default :
                $this->dbConn = mysqli_connect($this->sHost,
                                               $this->sUser,
                                               $this->sPass,
                                               $this->sDatabase);
                /* ou
                $this->$dbConn = new mysqli($this->sHost,
                                               $this->sUser,
                                               $this->sPass,
                                               $this->sDatabase); 

                */
                break;
        }//switch
        //se a conexão foi estabelecida
        if($this->dbConn){
            $this->sStatus = "Database conection ready.";
            $this->bStatus = true;
            return true;
        }else{
            $this->sStatus = "Connect error:".mysqli_connect_errno().
                                       " - ".mysqli_connect_error();
            $this->bStatus = false;
        }
        return $this->bStatus;
    }
    
    public function status() : string{
        return $this->sStatus;
    }
    
    private function exec ( $sqlCommand ){
        if($this->dbConn){  
            switch ($this->sDriver){
                case "POSTGRESQL":
                    break;
                case "MYSQL":
                default :
                    $this->vQueryResult = mysqli_query(  $this->dbConn , $sqlCommand);
            }
        }
    }
    /*
    @param type $sTable  products; 
    
    @param type $asFields["ProductID"];
                         ["ProductName"];   
                         ["UnitsInStock"]; 
                         - se for um array vazio então seleciona todos (*)
                                  
    @param type $asFilter["CategoryId" => category_id ]
                         -se não for um array vazio então não tem filtro
    
    */
    public function insert(){
        //TODO
    }
    
    public function update(){
        //TODO
    }
    
    public function delete(){
        //TODO
//        $delete = "DELETE FROM productos WHERE ProductID=''";
    }
    
    public function select($sTable, array $asFields, array $asFilter){
        //TODO: montar o comando de SQL de acordo com os parametros 
        $sql = "SELECT * FROM $sTable";
        //public function select($sTable, array $asFields, array $asFilter){}
        $this->exec($sql);
    }
    public function recordCount() {
        return mysqli_num_rows($this->vQueryResult);
    }
    public function getRecord() {
        return mysqli_fetch_array( $this->vQueryResult) ;
        
    }
    
    public function getRecord_object() {
        return mysqli_fetch_object( $this->vQueryResult) ;
        
    }
    
    public function getRecord_assoc() {
        return mysqli_fetch_assoc( $this->vQueryResult) ;
        
    }
}

