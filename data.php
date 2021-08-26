<?php

function Createdata(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataname = "fms";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dataname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dataname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS student(
							Course CHAR(50) NOT NULL,
							Year INT(5) NOT NULL,
							Block CHAR(2) NOT NULL,
                            ID VARCHAR(20) NOT NULL,
                            Lastname CHAR (25) NOT NULL,
							Firstname CHAR (25) NOT NULL,
                            Email VARCHAR(50) NOT NULL,
                            Age INT(5),
                            Gender CHAR(2) NOT NULL,
							Contactno BIGINT(20) NOT NULL 
                        );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }

    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

}