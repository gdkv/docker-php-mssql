<?php
    $arr = [
        1,3,5,6,7,8,9,0
    ];

    // foreach($arr as $ar){
    //     echo $ar;
    // }

    // phpinfo();
    // try {
    //     $dbh = new PDO('sqlsrv:Server=localhost\\Express;Database=Test', 'SA', 'YourStrong!Passw0rd');
    //     foreach($dbh->query('SELECT * from Users') as $row) {
    //         print_r($row);
    //     }
    //     $dbh = null;
    // } catch (PDOException $e) {
    //     print "Error!: " . $e->getMessage() . "<br/>";
    //     die();
    // }
    $serverName = "localhost";
    $connectionInfo = [
        "Database"=>"Test", 
        "UID"=>"SA", 
        "PWD"=>"YourStrong!Passw0rd"
    ];
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    // $sql = "SELECT * FROM Users";
    // $stmt = sqlsrv_query($conn, $sql);

    // if( $stmt === false ) {
    //     die( print_r( sqlsrv_errors(), true));
    // }

    // while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    //     echo $row['name']."<br />";
    // }
