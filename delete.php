<?php
    include_once 'db_connect.php';
    $success  = "";
    if(isset($_POST['delete']))
    {  
        $eid  = $_POST['eid'];
        $name = $_POST['name'];
        $address   = $_POST['address'];
        $phone     = $_POST['phone'];
        $dob     = $_POST['dob'];
        $doj    = $_POST['doj'];
        //$dno     = $_POST['phone'];
        $salary    = $_POST['salary'];
        
        
        $sql = "INSERT INTO employee (eid,name,address,phone,dob,doj,salary)
        VALUES ('$eid','$name','$address','$phone','$dob','$doj','$salary')";
        if ( mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
        }
        else
        {
        echo "Error: " . $sql . " " .mysqli_error($conn);
        }
         mysqli_close($conn);
    }
    
?>