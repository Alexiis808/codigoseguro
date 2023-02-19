<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <script src="https://kit.fontawesome.com/f97149e1de.js" crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
  <title>El Tuning Nunca Mue | Login</title>
</head>

<body>
  <div class="container">
    <div class="form">
      <h1>Iniciar sesión</h1>
      <form name="fLogin" action="validations/vlogin" method="POST">
        <input type="email" class="txt" id="txtEmail" placeholder="Correo" name="txtEmail" />
        <input type="password" class="txt" id="txtPass" placeholder="Contraseña" name="txtPass" />
        <input type="submit" class="btn" name="btnLogin" value="Iniciar sesión" />
      </form>
      <br /><br />
      <p>¿Olvidaste tu contraseña?</p>
      <br />
      <hr />
      <br><br>
      <p>
        ¿No tienes una cuenta? <a href="register">Registrate aquí.</a>
      </p>
    </div>
  </div>
  <div class="info">
  <center><img src="img/logo.jpg " width="500px" height="400px"></center>

<h2>El Tuning Nunca Muere</h2>

  </div>
</body>

</html>