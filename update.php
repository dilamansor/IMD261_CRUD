<!-----------------------------------------------------------
            START PHP SECTION TO UPDATE DATA
------------------------------------------------------------>

<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>


<!-----------------------------------------------------------
            START PHP SECTION TO CALL DATA FROM DB
------------------------------------------------------------>

<?php

    if (isset($_GET['admin_id'])){   //update your attribute - probably your pk
        $admin_id = $_GET['admin_id']; //update your attribute exactly as above
    
    

        $query = "select * from admin where admin_id = '$admin_id'";   //update entity, attribute and variable

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed".mysqli_error());
        }

        else{

            $row=mysqli_fetch_assoc($result);

            
        }
    }
    

?>

<!-----------------------------------------------------------
            END PHP SECTION TO CALL DATA FROM DB
------------------------------------------------------------>


<!-----------------------------------------------------------
            START PHP SECTION TO UPDATE DATA IN DB
------------------------------------------------------------>


<?php

if(isset($_POST['update_admin'])){   //VARIABLE MUST EXACTLY SAME AS INPUT NAME

    if(isset($_GET['id_new'])){   //VARIABLE EXACTLY SAME AS FORM ACTION
        $id=$_GET['id_new'];   //$VARIABLE CAN USE ANY NAME, VARIABLE EXACTLY SAME AS ABOVE
    }


    $admin_id = $_GET['admin_id'];   //UPDATE $VARIABLE AND ATRRIBUTE
    $admin_name = $_POST['admin_name'];   //UPDATE $VARIABLE AND ATRRIBUTE
    $admin_phone = $_POST['admin_phone'];   //UPDATE $VARIABLE AND ATRRIBUTE
    $admin_pass = $_POST['admin_pass'];   //UPDATE $VARIABLE AND ATRRIBUTE

    $query = "update admin set admin_name='$admin_name', admin_phone='$admin_phone', admin_pass='$admin_pass' where admin_id='$id'";   //UPDATE ENTITY, ATTRIBUTE AND VARIABLE

    $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed".mysqli_error());
        }

        else{
            header('location:index.php?update_msg=You have successfully updated.');
        }

}

?>

<!-----------------------------------------------------------
            END PHP SECTION TO UPDATE DATA IN DB
------------------------------------------------------------>

<!-----------------------------------------------------------
            START HTML SECTION TO INPUT DATA IN FORM
------------------------------------------------------------>


<form action="update.php?id_new=<?php echo $admin_id;?>" method="post"> <!-- UPDATE PAGE/FILE PHP, $VARIABLE -->
    <div class="form-group">
        <label for="admin_name"> Name: </label> <!-- UPDATE YOUR ATTRIBUTE AND OUTPUT NAME -->
        <input type="text" name="admin_name" class="form-control" value="<?php echo $row['admin_name']?>">
    </div> <!--UPDATE NAME AND ATRRIBUTE IN VALUE -->

     <div class="form-group">
        <label for="admin_phone"> Phone Number: </label>
        <input type="text" name="admin_phone" class="form-control" value="<?php echo $row['admin_phone']?>">
    </div>

    <div class="form-group">
        <label for="admin_pass"> Password: </label>
        <input type="text" name="admin_pass" class="form-control" value="<?php echo $row['admin_pass']?>">
    </div>

    <input type="submit" class="btn btn-success" name="update_admin" value="UPDATE"> <!-- IF U CHANGE INPUT NAME, MAKE SURE PHP POST VARIABLE SAME AS INPUT NAME -->
</form>

<!-----------------------------------------------------------
            END HTML SECTION TO INPUT DATA IN FORM
------------------------------------------------------------>


<?php include('footer.php'); ?>
