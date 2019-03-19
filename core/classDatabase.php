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


    public function __construct (){
        //TODO:CARREGAR INFORMAÇÕES DE ACESSO AO BANCO DE DADOS APARTIR DE UMA ARQUIVO
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
    
}

