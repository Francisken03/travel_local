<?php

    include ("../includes/server.php");

    $qSelect = "
        SELECT * FROM `db_traveldb`.`tbl_user_info`
        WHERE `delete_date` IS NULL
        ORDER BY `id` DESC
    ";

    $eSelect = mysqli_query($dbcon, $qSelect);  //executing the query

    if ($eSelect == true) {
        // echo "Record found!";
        // while ($rows = mysqli_fetch_array($eSelect) ){
        //     print_r($rows);
        // };
        

        $sHtml = "
            <table class= 'table table-striped table-hover'>
                <tr>
                    <th>Unique ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Registration Date</th>
                    <th>Action</th>
                </tr>

            ";
        while ($rows = mysqli_fetch_array($eSelect) ){
            // mysqli_fetch_assoc array name
            // mysqli_fetch_row array number

            $sHtml .= "
            <tr>
                <td>".$rows['id']."</td>
                <td>".$rows['first_name']."</td>
                <td>".$rows['last_name']."</td>
                <td>".$rows['email']."</td>
                <td>".$rows['phone']."</td>
                <td>".$rows['entry_date']."</td>
                <td>
                <button class='btn btn-primary' onclick='itemEdit(".$rows['id'].");'> Edit</button> 
                <button class='btn btn-danger' onclick='itemDelete(".$rows['id'].");'> Delete</button></td>
            </tr>

            ";
            // data-bs-toggle='modal' data-bs-target='#editModal'
        }

        $sHtml .= "</table>";
        echo $sHtml;
        
    
    } else {
        echo "Error found";
    }
?>