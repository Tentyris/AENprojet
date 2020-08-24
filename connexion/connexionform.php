

<!DOCTYPE html>
<html>
<head>
    <title> Connexion </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="formstyle.css">

</head>

<body>

<div class="sidenav">
    <div class="login-main-text">
        <h2>AEN<br> Page de connexion</h2>

    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form  action="verifConnexion.php" method= "post">
                <div class="form-group">
                    <label>Mail</label>
                    <input type="text" name="mail" class="form-control" placeholder="mail">
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password"  name = "mdp" class="form-control" placeholder="mot de passe">
                </div>
                <button type="submit" name="connexion" class="btn btn-black">connexion</button>

            </form>
            <?php
if (isset($error)) {
    echo '<font color = "red">' . $error . '</font> ';
    header('Location : connexionform.php');
            ?>
        </div>
    </div>
</div>
</body>
</html>
