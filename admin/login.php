<?php 
session_start();
    if (isset($_SESSION['user'])) {
        header('Location: /admin/');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Login</title>
    <link rel="stylesheet" href="/admin/assets/css/index.css">
</head>
<body class="body-login">
    <section class="section-login">
        <img class="logo-login" src="<?php $url?>/assets/svg/logo/le-mans/logo-le-mans-without-bg.svg">
        <form class="form-login" action="/admin/models/login/login.php" method="post">
            <input class="input-login" type="text" name="user" placeholder="Usuario" required ><br>
            <input class="input-login" type="password" name="pass" placeholder="Contraseña" required><br>
            <button class="btn-login" type="submit">Ingresar</button>
        </form>
        <p title="copyright" class="copy-login">© LE MANS, 2022.</p>
    </section>

</body>
</html>