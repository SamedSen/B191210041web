<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
	<body class="text-center">
    <div class="container">
    <form class="form-signin" method="POST">
      <br><br><br>
      <img class="mb-4" src="img/evicon.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Lütfen Giriş Yapın</h1>
      <label for="inputEmail" class="sr-only">Email addresi</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Şifre</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
    </div>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
 
    header("location:index.html");
    exit();
 
}



?>