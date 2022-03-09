<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $nationality = $_POST['nationality'];

    $sql = "INSERT INTO users(name, phone, email, password, gender, nationality)
            VALUES ('$name','$phone', '$email', '$password', '$gender','$nationality')";

if ($_POST['pass'] == $_POST['cpass']){
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
else{
    echo "Password fields should match";
}

}

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
    <title>Register -La Princess.com</title>
    <style>
        body{
            background-color: #b6d4fe;
        }
    </style>
</head>
<body>
<div class="row ">
    <div class="col-4"></div>
    <div class="col-4 mt-5">
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass" required>
            </div>
            <div class="mb-3">
                <label for="cpass" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="cpass" placeholder="Confirm Password" name="cpass" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="Male" >
                    <label class="form-check-label" for="radio2">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female">
                    <label class="form-check-label" for="radio2">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Nationality:</label>
                <select class="form-select form-control" name="nationality" id="" required>
                    <option value="Kenya">Kenya</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Other">Other</option>

                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <div class="col-4"></div>
</div>


</body>
</html>