<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Candidate Log In</title>
    <link rel="stylesheet" href="css/candidate_login.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    
<?php require "_partials.php"  ?>
<div class="container">
    <div class="form-box">
        <h1 class="main_header">Candidate Login</h1>
        <hr>
        <form action="validation.php"  method="get">
            <p>Username <input type="text" name="username" placeholder="Username"></p>
            <p>Password <input type="password" name="password" placeholder="password"></p>
            <input type="submit">
        </form>
    </div>
    <div class="form-box">
        <h2 class="signup">
            Don't have Account <a href="Signup.php">Sign Up</a>
        </h2>
    </div>
</div>
</body>

</html>
