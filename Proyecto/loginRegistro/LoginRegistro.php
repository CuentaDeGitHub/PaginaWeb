


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>  

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="LoginRegistro.css">
         
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="Validar.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Introduce tu usuario" name ="usuario" required >
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Introduce tu contraseña" name="contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Iniciar sesion">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">No tienes cuenta?
                        <a href="#" class="text signup-link">Registrate ahora</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registro</span>

                <form action="Registrar.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Introduce tu usuario" name="usuarioRegistro" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Introduce tu correo electronico" name="correoRegistro" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Crea una contaseña" name="contraseñaRegistro" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirma tu contraseña" name="contraseña2Registro" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Registrar cuenta">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Ya tienes cuenta?
                        <a href="#" class="text login-link">Inicia sesion</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="LoginRegistro.js"></script>

</body>
</html>
