<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="./script.php" method="post">
        <fieldset>
            <legend>
                Ingresa tu información en el formulario
            </legend>
            <p>
                <label for="#">Nombre: <input type="text" name="name" size="20" maxlength="40"></label>
            </p>
            <p>
                <label for="#">Email: <input type="email" name="email" size="40" maxlength="60"></label>
            </p>
            <p>
                <label for="genero">Género: </label>
                <input type="radio" name="gender" value="M">Masculino
                <input type="radio" name="gender" value="F">Femenino
            </p>
            <p>
                <label for="#">Edad:
                    <select name="age">
                        <option value="0-29">Menos de 30</option>
                        <option value="30-60">Entre 30 y 60</option>
                        <option value="60+">Más de 60</option>
                    </select>
                </label>
            </p>
            <p>
                <label for="#">Comentarios:
                    <textarea name="comments" rows="3" cols="40"></textarea>
                </label>
            </p>
        </fieldset>
        <p align="center"><input type="submit" name="submit" value="Enviar mi Información"></p>
    </form>
</body>

</html>