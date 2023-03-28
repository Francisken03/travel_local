<?php

// variable = mysqli_connect(hostname, username, password, database_name)

include("../includes/server.php");




if ($dbcon == true) {
    $nId = $_POST['itemNId'];
    $sFname = $_POST['fname'];
    $sLname = $_POST['lname'];
    $sEmail = $_POST['email'];
    $nCellNum = $_POST['cell'];

    try {
        $qUpdate = " 

            UPDATE `db_traveldb`.`tbl_user_info`
            SET
            `first_name`='{$sFname}',
            `last_name`='{$sLname}',
            `email` ='{$sEmail}',
            `phone` ='{$nCellNum}',
            `modified_date` = '" . date("Y-m-d H:i:s") . "'
            WHERE  `id`='{$nId}'

                ";


        $eUpdate = mysqli_query($dbcon, $qUpdate); //Connection and query
        
        // mysqli_query column name only
        // mysqli_query

        if ($eUpdate == true) {
            echo  "You have successfully updated ".$sFname."'s profile";
            
            
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