<?php

session_start();
$correo = $_SESSION['username'];

if (!isset($correo)) {
  header("location: ../index");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/product.css" />
  <title>El Tuning Nunca Muere | Autos</title>
</head>


<body>
  <div class="navbar">
    <div class="logo">
      <a href="../index"><img src="../img/logo.jpg" / width="140px" height="80px"></a>
    </div>
    <div class="search">
    <input type="text" placeholder="Buscar..." />
    </div>
    <div class="txt">
      <p><a href="../login"></a></p>
    </div>
    <div class="txt">
    </div>
    <div class="header">
      <ul id="menu">
      <li><a href="/PAGINA/index"> Inicio </a></li>
        <li><a href="/PAGINA/autos.php">Autos</a></li>
        <li><a href="/PAGINA/quejas.php">Quejas</a></li>
        <li><a href="/PAGINA/nosotros.php">Nosotros</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="viewProduct">
      <img src="../img/Autos/bochito.jpg" />
    </div>
    <div class="info">
      <h2>Bochito</h2>
      <br />
      <p>
        Las principales características serian: un auto familiar de cuatro plazas con motor enfriado
         por aire y capacidad de 1 litro. Su consumo debería
         ser de sólo 7 litros de gasolina por cada 100 Km y tenía que alcanzar con facilidad 100 Km/h. 
      </p>
      <br />
    </div>
    <div class="buy">
      <h2>Precio:</h2>
      <br />
 
      <h3>$90,000.00</h3>
      <br />
      
      <p>
      </p>
      <br />
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RNJ5Z2XCU5KGQ">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>


      </form>
    </div>
  </div>
</body>

</html>