<!-----------------------------------------------------------
            START PHP SECTION TO INSERT DATA
------------------------------------------------------------>

<?php
include 'dbcon.php';
    if(isset($_POST ['add_admin'])){ //UPDATE YOUR POST NAME

        
       $id = $_POST ['admin_id'];   //UPDATE YOUR ATTRIBUTES
       $name = $_POST ['admin_name'];  //UPDATE YOUR ATTRIBUTES
       $phone = $_POST ['admin_phone'];   //UPDATE YOUR ATTRIBUTES
       $pass = $_POST ['admin_pass'];   //UPDATE YOUR ATTRIBUTES

       if($id == "" || empty($id)){
        header('location:index.php?message=Required');
       }

       else{
        $query = "insert into admin (admin_id,admin_name,admin_phone,admin_pass) values ('$id','$name','$phone','$pass')"; //UPADTE YOUR ENTITY, ATTRIBUTES AND VARIABLES

        $result = mysqli_query($conn, $query);

        if(!$result){
            die ("Query failed".mysqli_error());
        }

        else{
            header('location:index.php?insert_msg=Your data has been added successfully');
        }
       }
    }
?>