<!-----------------------------------------------------------
            START PHP SECTION TO DELETE DATA
------------------------------------------------------------>


<?php include ('dbcon.php');?>

<?php

    if(isset($_GET ['admin_id'])){   //UPDATE YOUR ATTRIBUTE - PROBABLY YOUR PK
    $id = $_GET ['admin_id'];   //UPDATE YOUR ATTRIBUTE EXACTLY AS ABOVE

    $query = "delete from admin where admin_id = $id";   //UPDATE ENTITY, ATTRIBUTE AND VARIABLE

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed".mysqli_error());
    }

    else{
        header('location:index.php?delete_msg=You have successfully deleted');


    }
}

?>

<?php include('footer.php'); ?>