<?php

    include ("../includes/server.php");

    $nId = $_POST['nId'];

    $qSearch = "

        SELECT * FROM `db_traveldb`.`tbl_user_info`
        WHERE  `id`= '$nId';
    ";

    $eSearch = mysqli_query($dbcon, $qSearch);

    $rows = mysqli_fetch_assoc($eSearch);

    echo json_encode($rows);