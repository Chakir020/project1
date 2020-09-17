<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Custom CSS Files -->
    <link rel="stylesheet" href="style.css">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="form-box">
        <form>
            <label>Username:</label><br>
            <input type="text" class="form-control" name="username"  required/><br>   
            
            <label>Password:</label><br>  
            <input type="password" class="form-control" name="password" required/><br> 
            
            <div class="lostpsw-box">
                <a href="lostpsw.php" id="lostpsw-btn">wachtwoord vergeten?</a>
            </div><br>
            
            <input type="submit" class="btn btn-primary btn-submit" value="submit"/>
            
            <div class="register-btn-box">
                Geen lid? <a href="signup.php" id="register-btn">registreren</a>
            </div>
        </form> 
    </div>
</body>
</html> 

