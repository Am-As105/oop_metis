
<?php
  echo "amine"; 

   require_once "../core/basemodel.php";

//   function str_len($str): int 
//     {


//     $i = 0;
//     while (isset($str[$i]))
//       {
//         if ($str[$i] === "\0") break;  
//         $i++;
//     }
//     return $i;
// }

 
   function check_email($email):int
   {
       $i = 0;
       while ($i < strlen($email)){

        if ($email[$i] === '@'){

            return true;
        }
        $i++;
        
       }
       return false;
   }


   class  member extends  baseModel{


    
    private  int $id;
    private string $name;
    private  string $email; 



    public  function get_id()
    {
       return  $this->id;
    }
    public  function  set_name($name)
    {
      $this->name = $name;

    }

    public function  get_name():string
    {
        return $this->name;
    }
    
    
    public $arry_email  = [];
    
    public function set_email($email)
    {

       
      if (check_email($email)){

        echo "email check sucss";
        
      }else{
        echo "email failed";
      }
       
      }   
    }

  
  $email = new member() ;
  echo"\n";
  $email -> set_email("amine");
  
   


  
  ?>