<link rel="stylesheet" href="style.css">
<?php
// Validamos el nombre
if (!empty($_REQUEST['name'])) {
    $nombre = $_REQUEST['name'];
} else {
    $nombre = NULL;
    echo '<p class="error">Olvidaste ingresar tu nombre!</p>';
}

// Validamos el email
if (!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
} else {
    $email = NULL;
    echo '<p class="error">Olvidaste ingresar tu correo electrónico!</p>';
}

//Validamos el comentario
if (!empty($_REQUEST['comments'])) {
    $comentario = $_REQUEST['comments'];
} else {
    $comentario = NULL;
    echo '<p class="error">Olvidaste ingresar tu comentario!</p>';
}

// Validamos el género
if (isset($_REQUEST['gender'])) {
    $genero = $_REQUEST['gender'];

    if ($genero == 'M') {
        $saludo = '<p><strong>Que tenga un buen día, Señor!</strong></p>';
    } elseif ($genero == 'F') {
        $saludo = '<p><strong>Que tenga un buen día, Señora!</strong></p>';
    }
} else {
    $genero = null;
    echo '<p class = "error"><strong>Olvidó registrar su género!</strong></p>';
}

// Imprimimos los datos enviados, si todo está correcto
if ($nombre && $email && $genero && $comentario) {
    echo "<p>Gracias, <strong>$nombre</strong>, por el siguiente comentario:</p>
    <pre>$comentario</pre>
    <p>Te enviaremos la respuesta al correo <em>$email</em></p>\n";
    echo $saludo;
} else {
    echo '<p class = "error"><strong>Por favor regresa y completa el formulario nuevamente!</strong></p>';
}

?>