<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
        <title>
            Connexion
        </title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="commStyle.css"/>
        <link rel="icon" type="image/png" sizes="25x25" href="Images/icon.png">
</head>
<body>

    <div class="container col-md-5 col-12 py-5">
        <h2 class="text-center">Connexion</h2>
        <form method="POST" action="login.php" class="text-center">
            <div class="form-group">
                <label for="username"><h4>Username :</h4></label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"><h4>Password :</h4></label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Connection">
        </form>

        <br><br>
        <div>
            <h4 class="text-center">You don't have an account ? <a href=sign_in.php>Sign up here</a></h2>
        </div>
    </div>

</body>
</html>