<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/EstiloLogin.css">

</head>

<body class="bg-white">
    <div class="container">
        <div class="row justify-content-center m-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 d-none d-lg-block">
                        <img src="img/loginTabata.jpg" alt="imagen-login" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-center my-4">Bienvenido</h1>
                                 <?php if(isset($_GET['msg'])){ ?>
                                     <div class="alert alert-danger text-center" role="alert">
                                         <?=$_GET['msg']?>
                                     </div>
                                     <?php }?>

                                <form class="form-signin" method="post" action="../Controlador/accion/act_login.php" class="p-3">
                                    <div class="form-signin">
                                        <input name="correo" type="email" class="form-control mb-2" id="email" 
                                            placeholder="Ingrese Correo Electronico" required>
                                    </div>
                                    <div class="form-signin">
                                        <input name="password" type="password" class="form-control " id="contraseña"
                                            placeholder="Ingrese Contraseña" required>
                                    </div>
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="recordar"
                                                id="recordar-contraseña" value="checkedValue" aria-checked="false">
                                            Recordar Contraseña
                                        </label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Iniciar
                                        sesión</button>
                                    <hr>
                                    <a class="btn btn-google btn-block">
                                        <span class="fab fa-google"></span>
                                        Iniciar Sesion Con Google
                                    </a>
                                    <a class="btn btn-facebook btn-block">
                                        <span class="fab fa-facebook-f"></span>
                                        Iniciar Sesion Con Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" data-toggle="modal"
                                        data-target="#recuperaContraseña">
                                        Recuperar Contraseña</a>
                                </div>
                                <div class="text-center">
                                    <a href="registro.php" class="small">Registrarse</a>
                                </div>
                            </div>
                            <div class="col-12">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="recuperaContraseña" tabindex="-1" role="dialog"
        aria-labelledby="modalInstruccionesCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="recuperaContraseñaLongTitle">Recuperar Contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1>hola</h1>

            </div>
        </div>
        
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>