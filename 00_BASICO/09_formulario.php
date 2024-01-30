<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="10_index.php" method="GET">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>
        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencias">Ciencias</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>

        <br><br>

        <label>
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">Manzana
        </label>

        <br><br><br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>