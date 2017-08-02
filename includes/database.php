<?php 
//Connect to MySQL
$db_host='localhost';
$db_name='store';
$db_user='root';
$db_pass='1234';

//Create MySQL Object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Erro Handler
if(mysqli_connect_errno()){
    printf("Connection failed: %s\n",mysqli_connect_error());
    exit();
}