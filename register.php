<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Regist</title>
</head>

<style>
    *{
    font-family: poppins;
}
body{
    background-image: url(img/jemuran.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
.box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 90vh;
    
}
.container{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px; 
}
.span{
    color: aquamarine;
    font-size: small;
    display: flex;
    justify-content: center;
    padding: 0 1opx 0 10px;
}
.header{
    color: aquamarine;
    font-size: 30px;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0  ;
}
.input-field{
    display: flex;
    flex-direction: column;
}
.input{
    height: 45px;
    width: 87%;
    border: none;
    outline: none;
    border-radius: 30px;
    color: rgb(4, 7, 6);
    padding: 0 0 0 45px;
    background: rgba(255,255,255,0.1);
}
.i{
    position: relative;
    top: -33px;
    left: 17px;
    color: rgb(23, 48, 48);
}
::-webkit-input-placeholder{
     color: rgb(10, 15, 15);
}
.submit{
    border: none;
    border-radius: 30px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    background: rgb(255, 255, 255);
    cursor: pointer;
    transition: .3s;
}
.submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0,0,0,0.2);
}
.bottom{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-size: small;
    color: #fff;
    margin-top: 10px;
}
.left{
    display: flex;
}
.label a{
    color: #fff;
    text-decoration: azure;
}

* {
        margin: 0;
        padding: 0;
        outline: 0;
        font-family: 'Open Sans', sans-serif;
    }

    body {
        height: 100vh;
        background-image: url(img/jemuran.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px 25px;
        width: 300px;

        background-color: transparent;

        background-color: rgba(143, 139, 139, 0.7);
    }

    .container h1 {
        text-align: left;
        color: #fafafa;
        margin-bottom: 30px;
        text-transform: uppercase;
        border-bottom: 4px solid #2979ff;
    }

    .container label {
        text-align: left;
        color: #000000;
    }

    .container form input {
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #000000;
        color: #fff;
        font-size: 20px;
    }

    .container form button {
        width: 100%;
        padding: 5px 0;
        border: none;
        background-color: #000000;
        font-size: 18px;
        color: #fafafa;
    }
</style>

<body style=" background-image: url(img/jemuran.jpg);">
    <div class="container">
    <form method="post" action="prosesregister.php">
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" placeholder="Email"  name="email" value="<?php echo $email; ?>"required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text"placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">password</label>
                <input type="password" placeholder="Password"  name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">CPassword</label>
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="mb-3">
                <button name="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>