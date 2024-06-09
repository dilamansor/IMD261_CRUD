<!---------------------------------------------
THESE 2 PHP CODE BELOW ARE FOR LINK FILE 
---------------------------------------------->
<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>


<!--------------------------------------------------------------------------------------------------
 THESE ARE HTML + CSS CODE - FOR USER INTERFACE. TO EDIT CSS STYLE, PLEASE EDIT ON style.css FILE
 -------------------------------------------------------------------------------------------------->

<div class="box1"> 

            <br><br><br>
            <h5> All available records (Admin)</h5>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Admin</button>

        <br><br>
        <table class="table table-hover table-bordered table-striped"> 
            <thead>
                <tr>
                    <th> ID </th>
                    <th> NAME </th>
                    <th> PHONE NUMBER </th>
                    <th> PASSWORD </th>
                    <th> UPDATE </th>
                    <th> DELETE </th>
                </tr>

            </thead>
            <tbody>

    <!--------------------------------------------------------------------
    BELOW IS THE PHP SECTION TO SHOW ALL YOUR DATA IN SELECTED TABLE
    --------------------------------------------------------------------->

    <?php 

        $query = "select * from admin"; //CHANGE TABLE NAME

        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query failed".mysqli_error());
        }

        else{
            while($row = mysqli_fetch_assoc($result)){

    ?>

                <tr>
                    <td><?php echo $row ['admin_id']; ?></td> <!-- REPLACE WITH YOUR ATTRIBUTE -->
                    <td><?php echo $row ['admin_name']; ?></td>
                    <td><?php echo $row ['admin_phone']; ?></td>
                    <td><?php echo $row ['admin_pass']; ?></td>

                    <!---------------------------------------
                    THESE 2 <TD> ARE FOR BUTTON
                    ---------------------------------------->
                    <td> <a href = "update.php?admin_id=<?php echo $row ['admin_id']; ?>" class = "btn btn-success"> UPDATE </td>
                    <td> <a href = "delete_page_1.php?admin_id=<?php echo $row['admin_id'];?>" class = "btn btn-danger"> DELETE </td>

                </tr>

    <?php 
        }
        }
    ?>

<!---------------------------------------------
    END PHP SECTION TO SHOW ALL DATA
--------------------------------------------->
                

            </tbody>
        </table>



<!---------------------------------------------
    START PHP SECTION FOR APPROPRIATE MSG
--------------------------------------------->

        <?php

            if(isset($_GET['message'])){
                echo "<h5>" .$_GET['message']."</h5>";
            }

        ?>

        <?php

            if(isset($_GET['insert_msg'])){
             echo "<h6>" .$_GET['insert_msg']."</h6>";
            }

        ?>

        <?php

            if(isset($_GET['update_msg'])){
            echo "<h6>" .$_GET['update_msg']."</h6>";
            }

        ?>


        <?php

            if(isset($_GET['delete_msg'])){
             echo "<h6>" .$_GET['delete_msg']."</h6>";
            }

        ?>

<form action="insert_data.php" method="post">
       
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD NEW ADMIN</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="form-group">
                <label for="admin_id"> ID: </label>
                <input type="text" name="admin_id" class="form-control">
            </div>
            

            <div class="form-group">
                <label for="admin_name"> Name: </label>
                <input type="text" name="admin_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="admin_phone"> Phone Number: </label>
                <input type="text" name="admin_phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="admin_pass"> Password: </label>
                <input type="text" name="admin_pass" class="form-control">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-success" name="add_admin" value="ADD">
      </div>
    </div>
  </div>
</div>
        </form>

<!---------------------------------------------
            END HTML + CSS SECTION 
--------------------------------------------->


<!--------------------------------------
P       HP CODE TO LINK FILE
--------------------------------------->
<?php include('footer.php'); ?>

        