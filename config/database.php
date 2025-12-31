<?php
   
class connect_db {
 

    private $servername;
    private $username;
    private $password;
    private $dbname;

    private $conn = null;

    protected function connect()
    {
        $this->servername = "localhost";
        $this->username   = "root";  
        $this->password   = "";
        $this->dbname     = "MTS";

        if ($this->conn === null) 
          {
            try {
                $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname};charset=utf8",$this->username,$this->password);

                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo "connected";

            } catch (PDOException $e) {
                echo "connection failed " . $e->getMessage();
            }
        }

        return $this->conn; 
    }
}

  class amie extends connect_db{
     

     public function hiba()
     {
        $cn = $this->connect();
      
     }

 
  }
 $amine = new amie();
 $conn = $amine->hiba();

// if ($conn) {
//     echo "Connection is successful!";
// } else {
//     echo "Connection failed!";
// }


?>

