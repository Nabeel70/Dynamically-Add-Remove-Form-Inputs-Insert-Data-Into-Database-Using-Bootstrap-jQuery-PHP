<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "forms";

//Create Connection
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      
          } else {
              echo"Connection Successfull";"<br>";

// $conn = new PDO('mysql:host=localhost;dbname=forms', 'root', '');
if (isset($_POST['product_bill'])){
        // print_r($_POST['product_bill']);
        foreach ($_POST['product_bill'] as $key => $value) {
                
                // echo "value => ".$value." key=> ".$key.'<br>';
                $invoice = $_POST['product_invoice'];
                $date = $_POST['product_date'];
                $khata = $_POST['product_khata'];
                $quality = $_POST['product_quality'];
                $width = $_POST['product_width'];
                
                $bill = $_POST['product_bill'][$key];
                $customer = $_POST['product_customer'][$key];
                $lot = $_POST['product_lot'][$key];
                $thaan = $_POST['product_thaan'][$key];
                $qty = $_POST['product_qty'][$key];
                // echo $invoice.'<br>';
                // echo $date.'<br>';
                // echo $khata.'<br>';
                // echo $quality.'<br>';
                // echo $width.'<br>';
                // echo $bill.'<br>';
                // echo $customer.'<br>';
                // echo $lot.'<br>';
                // echo $thaan.'<br>';
                // echo $qty.'<br>';
                

                $sql = "INSERT INTO `test_form`(`invoice`, `date`, `khata`, `quality`, `width`, `bill`, `customer`, `lot`, `thaan`, `qty`)
                VALUES ('{$invoice}','{$date}','{$khata}','{$quality}','{$width}','{$bill}','{$customer}','{$lot}','{$thaan}','{$qty}')";
                mysqli_query($mysqli, $sql);    

        }
        
}
echo"<br> Data inserted successfully";  
    }
?>