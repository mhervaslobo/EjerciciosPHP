<html>

<head>
  <title>Problema</title>
</head>

<body<?php if (isset($_COOKIE['color'])) echo " bgcolor=\"$_COOKIE[color]\"" ?> >
  <form action="57_pagina2.php" method="post">
  Seleccione de que color desea que sea la página la póxima vez que recargue:<br>
  <input type="radio" value="rojo" name="radio">Rojo<br>
  <input type="radio" value="verde" name="radio">Verde<br>
  <input type="radio" value="azul" name="radio">Azul<br>
  <input type="submit" value="Crear cookie">
  </form>
</body>

</html>
