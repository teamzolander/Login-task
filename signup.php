<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="newFont.css">

</head>
<body>
    <div class="wrap">
        <div class="nav">
            <div class="logo"> 
                <a href="index.php">Zolander</a>
            </div>
        </div> <!--end of nav div-->
        
        <div class="signup">
            <form action="register.php" method="POST">
                <h2>Sign Up</h2>
                <input type="text" name="name" placeholder="Enter Name">
                <input type="text" name="username" placeholder="Enter Username">
                <input type="email"  name="email"  placeholder="Enter Email">
                <input type="tel" name="phone" placeholder="Enter Phone">
                <input type="password" name="password" placeholder="Enter Password">
                <input type="password" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" value="Sign Up" class="button">
                <a href="newLogin.php">Have an existing account? Login here</a>
            </form>
        </div>
        
    </div>
</body>
</html>
