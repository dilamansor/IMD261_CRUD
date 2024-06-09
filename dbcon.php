<!------------ THIS FILE IS FOR DATABASE CONNECTION ----------------->

<?php
    define ("HOSTNAME", "localhost");

    define ("USERNAME", "root");

    define ("PASSWORD", "MyN3wP4ssw0rd"); //THIS IS PWD FOR SERVER, IF U CAN LOGIN PHPMYADMIN WITHOUT PWD, DELETE THIS PWD. OTHERWISE REPLACE WITH YOUR PWD//

    define ("DATABASE", "test"); //MUST REPLACE WITH YOUR DB NAME //

    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if (!$conn)
        {
            die ("Connection failed");
        }
