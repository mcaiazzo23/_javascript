<?php 
// Connect to MySQL
$con = mysqli_connect("insert server url here","insert database username here","insert database password here","insert database name here");

if(mysqli_connect_errno()) {
    echo 'Failed to connect: '.mysqli_connect_error();
}