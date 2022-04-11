<?php  
   
    // Create connection
    


    class oder{
        public $idoder;
        public $diachi;
        
public $tenkh;
public $sdt;
public $mail;
        public function __construct($idoder,$dc,$ten,$dt,$Mail){
          $this->idoder=$idoder;
            $this->diachi = $dc;
            $this->tenkh = $ten;
            $this->sdt=$dt;
            $this->mail=$Mail;
           
        }
        public function getIdoder()
        {
              return $this->idoder;

        }
        public function save(){
      
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dcxemay";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO oder ( Diachi,Tenkh,Sdt,Mail)
    VALUES ('$this->diachi','$this->tenkh','$this->sdt','$this->mail')";
    
    if (mysqli_query($conn, $sql)) {
      $new = new oder();
      echo "New record created successfully";
     
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
        }

      
    }
?>