<?php  
   
    // Create connection
    


    class Product{
        
        public $tendanhmuc;
        

        public function __construct($pro_name){
            $this->tendanhmuc = $pro_name;
           
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
    
    $sql = "INSERT INTO danhmuc ( Tendanhmuc)
    VALUES ('$this->tendanhmuc')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
        }

      
    }
?>