<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<h1>Agregar Usuario</h1>
<form action="./controlador/insertar.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" maxlength="150" placeholder="Samadhi Orozco Pastor" required >
<br> <br>
<label for="email">Email:</label>
<input type="email" name="email" maxlength="150" placeholder="usuario@email.com" required>
<br><br>
<label for="tefono">Telefono</label>
<input type="number" name="telefono" maxlength="15" placeholder="55 1234 5678" required>
<br><br>
<button type="submit">Registrar</button>


</form>

</body>
</html>