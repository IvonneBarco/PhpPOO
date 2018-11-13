<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calcular.php" method="post">
      <label for="">Valor 1</label>
      <input type="text" name="val1" value="">
      <p></p>
      <label for="">Valor 2</label>
      <input type="text" name="val2" value="">
      <p></p>
      <select name="opcion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
      </select>
      <p></p>
      <button type="submit" name="Calcular">Calcular</button>
    </form>

  </body>
</html>
