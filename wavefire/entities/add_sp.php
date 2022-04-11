<?php  
   
    // Create connection
    


    class sp{
        
        public $tensp;
        
public $gia;
public $img;
public $mota;
public $danhmuc;
        public function __construct($ten,$gia,$img,$mota,$dm){
            $this->tensp = $ten;
            $this->gia = $gia;
            $this->img=$img;
            $this->mota=$mota;
            $this->danhmuc=$dm;
           
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
    
    $sql = "INSERT INTO sanpham ( Tensp,Gia,Img,Mota,MaDanhmuc)
    VALUES ('$this->tensp','$this->gia','$this->img','$this->mota','$this->danhmuc')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
        }

      
    }
?>