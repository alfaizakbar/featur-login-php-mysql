<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == 'gagal'){
        echo "<div>gagal</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram-login</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-128/instagram-1868978-1583142.png">
    <style>
        body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background-image: linear-gradient(to right, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
    background-size: cover; 
    height: 100vh;
    overflow: hidden;
}
.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background:white;
    border-radius: 10px;
    height: 350px;
}
.center h1{ 
    text-align: center;
    padding:  0 0 20px 0;
    border-bottom: 1x solid silver;
}
.center h1{
background: -webkit-linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);-webkit-background-clip: text;-webkit-text-fill-color: transparent;
}
.center form{
    padding: 0 40px;
    box-sizing: border-box;
}
form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}
.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}
.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #833AB4;
    transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
    top: -5px;
    color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
    width: 100%;
}
.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}
.pass:hover{
    text-decoration: underline;
}
button[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background-image: linear-gradient(to right, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
    border-radius: 25px;
    font-size: 18px;
    color:#e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
button[type="submit"]:hover{
    border-color: #833AB4;
    transition: .5s;
}
.signup_link{
    margin: 3px 0;
    text-align: center;
    font-size: 16px;
    color: #666666; 
}
.signup_link a{
    color: #2691d9;
    text-decoration: none;
}
.signup_link a:hover{
    text-decoration: underline;
}
    </style>
</head>
<body>

<div class="center">
    <h1>LOGIN</h1>
    <form action="ceklogin.php" method="post">
        <div class="txt_field">
            <input type="text" name="username" id="username" required>
            <span></span>
            <label for="username">UserName</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" id="password" required>
            <span></span>
            <label for="password">Password</label>
        </div>
        <button type="submit">Login</button>
        <div class="signup_link">
            Not a member? <a href="register.php">Sign up</a>  
            <script type="text/javascript">
            </script>                                
        </div>
    </form>
</body>
</html>