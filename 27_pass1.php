<?php

/*$_SERVER es un array que contiene información, tales como cabeceras, rutas y
ubicaciones de script. Las entradas de este array son creadas por el servidor
web.*/

/* Porque es un script que ejecutas antes de la propia página, en lugar de
incluirlo lo escribo y ejecuto en el propio fichero */

/* No porque el pass no esta hash (encriptado) por lo que alguien podria verlo
Buscar https vs http */

  if (isset($_POST['pw'])) {
    $pw = $_POST['pw'];
    if ($pw == "magic") {
      header ("Location: newpage1.html");
    } elseif ($pw == "abracadabra" ){
      header ("Location: newpage2.html");
    } else {
      header ("Location: sorry.html");
    }
  }

?>

<html>

<head>

  <title>Ejemplo de password y header</title>

</head>

<body>

<h1> Ejemplo de password y funcion header </h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <input type="text" name="pw">
<input type="submit" value="Envialo">

</form>

</body>

</html>
