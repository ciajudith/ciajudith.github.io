<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formulaire.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web\css\all.css">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist\css\bootstrap.css">
    <title>Signing in / Logging in</title>
</head>
<body>
    <form action="traitementform.php" method="post">
        <h1>Signing In</h1>
        <i class="fa-solid fa-user"></i>
        
        <div class="row">
            <div class="col-3"></div>
                <div class="form-floating mb-3 col-6">
                    <input type="text" class="form-control pad" name="name" value="" id="floatingInput" placeholder="Ariana">
                    <label for="floatingInput">First Name</label>
                </div> 
                <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="form-floating mb-3 col-6">
                <input type="text" class="form-control" name="lstname" value="" id="floatingInput" placeholder="Grande">
                <label for="floatingInput">Last Name</label>
            </div>    
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="form-floating mb-3 col-6">
                <input type="email" class="form-control" name="email" value="" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="form-floating col-6">
                <input type="password" class="form-control" name="passwrd" value="" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="form-check col-6">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>    
                </div>
                <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                <button class="btn btn-danger" type="reset">Abandon</button>
            </div>
            <div class="col-3"></div>
        </div>
        

    </form>
    <div>

    </div>
</body>
</html>