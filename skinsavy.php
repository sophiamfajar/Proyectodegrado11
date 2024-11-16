
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        .checkbox {
            margin-top: 10px;
        }
    </style>
</head>

<body>
        <div class="form-container">
    <form action="bdSkinSavy.php" method="POST"> <!--creo el formulario-->
        <h1> REGISTRO</h1>
        <p>Nombre</p><input type="text" placeholder=" ingrese su nombre" name="nombre" required> </p>
        <p>Apellidos</p> <input type="text" placeholder=" ingrese sus apellidos" name="apellidos" required> </p>
        <p>usuario</p> <input type="text" placeholder=" ingrese su usuario" name="nusuario" required> </p>

        <p>Clave</p> <input type="password" id="clave" placeholder=" ingrese su clave" name="clave" required> </p>
       <!-- el id ="clave" sive para convertir de passwor a text-->
        <input type="checkbox" id="togglePassword" class="checkbox">
        <label for="togglePassword">Mostrar Contraseña</label> <!--permite al usuario ver la contraseña ingresada-->

        <p>Email</p> <input type="email" placeholder=" ingrese su Email" name="correo" required> </p>

        <input type="submit" value="Registrar" class="boton">
        
    </form>

        </div>
    
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('clave');

        togglePassword.addEventListener('change', function () {
            // Cambiar el tipo de entrada entre 'password' y 'text'
            if (this.checked) {
                passwordInput.setAttribute('type', 'text');
            } else {
                passwordInput.setAttribute('type', 'password');
            }
        });
    </script>
</body>

</html>