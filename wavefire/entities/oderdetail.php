<?php  
   
    // Create connection
    
   

    class oderdetail{
        
        public $soluong;
        
public $Gia;
public $Masp;
public $idoder;
        public function __construct($sl,$gia,$masp,$id){
            $this->soluong = $sl;
            $this->Gia = $gia;
            $this->Masp=$masp;
            $this->idoder=$id;
           
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
    
    $sql = "INSERT INTO oderdetail ( Soluong,Gia,Masp,idoder)
    VALUES ('$this->soluong','$this->Gia','$this->Masp','$this->idoder')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
        }

      
    }
?>