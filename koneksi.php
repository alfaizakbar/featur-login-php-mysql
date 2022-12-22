<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');

function tambah($data){
    global $con;
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $level = $data['level'];
    $query = "INSERT INTO user VALUES ('','$username','$email','$password','$level')";
    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
};
?>