<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <script src="https://kit.fontawesome.com/f97149e1de.js" crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
  <title>El Tuning Nunca Muere | Registro</title>
</head>

<body>
  <div class="container">
    <div class="form">
      <h1>Registrate</h1>
      <form name="fRegister" action="validations/vregister" method="POST">
        <input type="text" class="txt" id="txtName" placeholder="Nombre" name="txtName" />
        <input type="text" class="txt" id="txtLastname" placeholder="Apellido" name="txtLastname" />
        <input type="email" class="txt" id="txtEmail" placeholder="Correo" name="txtEmail" />
        <input type="password" class="txt" id="txtPass" placeholder="Contraseña" name="txtPass" minlength="11" />
        <input type="submit" class="btn" name="btnLogin" value="Registrate" />
      </form>
      <br /><br />
      <hr />
      <br /><br />
      <p>
        ¿Ya tienes una cuenta? <a href="login">Inicia sesión aquí.</a>
      </p>
    </div>
  </div>
  <div class="info">
  <center><img src="img/logo.jpg " width="500px" height="400px"></center>

    <h2>El Tuning Nunca Muere</h2>
  </div>
</body>

</html>