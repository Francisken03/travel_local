<?php

// variable = mysqli_connect(hostname, username, password, database_name)

    include ("../includes/server.php");

    if ($dbcon == true) {

        $sFname = $_POST['fname'];
        $sLname = $_POST['lname'];
        $sEmail = $_POST['email'];
        $nCellNum = $_POST['cell'];

        try {
            $qInsert = " INSERT INTO `db_traveldb`.`tbl_user_info`
                (`first_name`, `last_name`, `email`, `phone`, `entry_date`)
                VALUES
                ('".$sFname."', '{$sLname}', '{$sEmail}', '{$nCellNum}', '".date("Y-m-d H:i:s")."')
                ";


            $eInsert = mysqli_query($dbcon, $qInsert); //Connection and query
            // mysqli_query column name only
            // mysqli_query
            
            if ($eInsert == true) {
                echo "$sFname"." successfully saved";
            } else {
                echo "Error. May mali sa eInsert";
            }

        } catch (Exception $e) {
            echo "Error!";
        }   

    } else {
        echo "Error. Please contact system admin for assistance";
    }

    


   

 ?>