<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviar.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required placeholder="Samadhi Orozco Pastor" maxlength="150">
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required placeholder="21" maxlength="2">
        <br>
        <label for="carrera">Carrera:</label>
        <input type="text" name="carrera" required placeholder="Computación" maxlength="150">
        <br>
        <label for="numeroCuenta">Numero de cuenta:</label>
        <input type="text" name="numeroCuenta" required placeholder="123456675" maxlength="9">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>