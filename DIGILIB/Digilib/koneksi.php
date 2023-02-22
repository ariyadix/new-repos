<?php

    // $servername = "localhost";
    // $username = "fkgulm";
    // $password = "Rjqbiyvc87qV";
    $servername = "localhost";
    $username = "root";
    $password = "";

    //membuat koneksi ke database
    try {
        $conn = new PDO("mysql:host=$servername;dbname=fkgulm_id", $username, $password);
        // Pengaturan koneksi ke database
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

?>