<?php

    $db = new PDO("sqlsrv:Server=crm-db;Database=test", "SA", "Supa!Passw0rd");
    
    $sql = "SELECT * FROM [user]";
    $users = $db->query($sql);
    
    foreach ($users as $user) {
        print_r($user);
    } 
