<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($email == $row['email'] && $password == $row['password']){
         header('location:useraccount.php');
       }
    }
    }
} else {
    echo "wrong password or username";
}
$conn->close();
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="javascript" href="bootstrap/js/bootstrap.bundle.js">
    <title>Login</title>
    <style>
        body{
            background-color: #b6d4fe;
        }
    </style>
</head>
<body>

</body>
</html>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
            </div>

            <button type="submit" name="submit" class="btn btn-success">login</button>
        </form>
        <p>Don't have account? <a href="register.php">Sign Up?</a> </p>
    </div>
    <div class="col-3"></div>
</div>




