<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php">
        nome <input type="text" name="nome">
        <p>estado civil:</p>
        <select name="estadocivil">
      <option value="0">escolha uma opçao</option>
      <option value="1">solitario</option>
      <option value="2">casado</option>
      <option value="3">divorciado</option>
      <option value="4">viúvo</option>
      <option value="5">unial estavel</option>
        </select>
        <input type="submit" value="verificar">
    </form>
</body>
</html>