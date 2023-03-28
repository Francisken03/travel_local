<?php

    include ("../includes/server.php");

    $nId = $_POST['nId'];

    $qDelete = "
    
        UPDATE `db_traveldb`.`tbl_user_info`
        SET `delete_date`='".date("Y-m-d H:i:s")."'
        WHERE  `id`= '$nId';

    ";

    // $qSelect = "

    //     SELECT * FROM `db_traveldb`.`tbl_user_info`
    //     WHERE `delete_date` IS NULL
    //     ORDER BY `id` DESC
    // ";

    $eDelete = mysqli_query($dbcon, $qDelete); //execute the delete query
    // $eSelect = mysqli_query($dbcon, $qSelect);  //executing the select query

    // if ($eSelect == true) {
    //     // echo "Record found!";
    //     // while ($rows = mysqli_fetch_array($eSelect) ){
    //     //     print_r($rows);
    //     // };
        

    //     $sHtml = "
    //         <table class= 'table table-striped table-hover'>
    //             <tr>
    //                 <th>Unique ID</th>
    //                 <th>First Name</th>
    //                 <th>Last Name</th>
    //                 <th>Email</th>
    //                 <th>Phone</th>
    //                 <th>Registration Date</th>
    //                 <th>Action</th>
    //             </tr>

    //         ";
    //     while ($rows = mysqli_fetch_array($eSelect) ){

    //         $sHtml .= "
    //         <tr>
    //             <td>".$rows['id']."</td>
    //             <td>".$rows['first_name']."</td>
    //             <td>".$rows['last_name']."</td>
    //             <td>".$rows['email']."</td>
    //             <td>".$rows['phone']."</td>
    //             <td>".$rows['entry_date']."</td>
    //             <td>
    //             <button class='btn btn-primary'> Edit</button>
    //             <button class='btn btn-danger'> Delete</button></td>
    //         </tr>

    //         ";
    //     }

    //     $sHtml .= "</table>";
    //     echo $sHtml;
        
    
    // } else {
    //     echo "Error found";
    // }
?>