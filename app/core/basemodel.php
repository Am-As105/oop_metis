


<?php

require_once "../../config/database.php"; 




class baseModel  extends  connect_db{

    protected $data_base;
    protected $table_name;
    

    public function __construct()
    {
        $this->data_base = $this->connect();
        
    }

    protected  function find_id($id)
    {   
        $sql = $this->data_base->prepare("SELECT  * from  {$this->table_name} where id = ?");

        $sql->excute([$id]);
        
    }
     

    protected  function  delete($id)
    {
         $sql = $this->data_base->prepare("DELETE  from {$this->table_name} where id =?");
         $sql->excute([$id]);  
    }
    
    
    protected function insert($name ,$email)
    {
        $sql  = $this->data_base->prepare("INSERT into {$this->table_name} (name , email) value ( ?, ?)");
        $sql->excute([$name ,$email]);
    }

    protected  function  insert_P_A($title ,  $descrption , $project )
    {
        $sql = $this->data_base->prepare("INSERT into project ");

    }

    
} 

  

 

?>