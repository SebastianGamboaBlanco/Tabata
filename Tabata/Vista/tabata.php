<?php
    session_start();
    if (!isset($_SESSION['ID_USUARIO'])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabata</title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <link rel="stylesheet" href="css/EstiloTabata.css">
</head>
<body>
    <nav class="navbar navbar-light bg-white navbar-expand-md border rounded-0">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="./img/logoTabata.png" alt="Logo pagina" width="100" height="auto" /></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal"
                aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menu de navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="tabata.php" class="nav-link active">Inicio</a>
                </li>
                <li class="nav-item"><a type="button" class="nav-link" data-toggle="modal"
                    data-target="#modalRegistroTabata">Registrar Tabata</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link  mt-2 py-0"><?php
                        session_start();
                        echo $_SESSION['NOMBRE_USUARIO'];
                    ?></a>
                </li>
                <li class="nav-item">
                <a href="cerrarSesion.php" class="btn btn-primary btn-block" type="submit">Cerrar sesion</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="Tabatas mt-5">
        <div class="container">
            <h1 class="text-center">Tabatas</h1>
            <div class="row" id="tabata" >
        
            </div>
        </div>

    </section>
    <div class="inic">
        <div class="container">
            <div class="row mt-5">
                <div class="col-4 colum">
                    <div class="row">
                        <div class="col-12">
                            <div class="datos">
                                <div class="mt-1 ">
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 class="text-end mt-3 ">Numero de series</h4>
                                        </div>
                                        <div class="col-4">
                                            <h1 class="mt-2" id="serie"></h1>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="datos mt-2">
                                <div class="mt-1 ">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="text-end mt-3">Tiempo de preparacion</h5>
                                        </div>
                                        <div class="col-4">
                                            <h1 class="mt-2" id="tPreparacion"></h1>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div>
                        <a href="#" type="button" onclick="iniciar(this)" class="iniciar btn btn-primary btn-block mt-3">Iniciar tabata</a>
                    </div>
                </div>
                <div class="col-4 colum">
                    <div class="row">
                        <div class="col-12">
                            <div id="tiempoTotal" class="text-center">
                                <h4>Tiempo total</h4>
                                <h1 class="mt-3 display-3" id="tTotal"></h1> 
                            </div>
                            
                            
                
                        </div>  
                        <div class="col-12">
                            <div class="datos mt-2">
                                <div>
                                    <div class="tDes">
                                        <h1 id="tDescanso"></h1>
                                    </div>

                                    <h4 class="mt-0 pt-0">Tiempo de descanso</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 colum">
                    <div class="row">
                        <div class="col-12">
                            <div class="datos">
                                <div class="mt-1 ">
                                    <div class="row">
                                        <div class="col-4">
                                            <h1 class="mt-2" id="numRondas"></h1>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-start mt-3">Numero de rondas</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-12">
                            <div class="datos mt-2">
                                <div class="mt-1 ">
                                    <div class="row">
                                        <div class="col-4">
                                            <h1 class="mt-2" id="tActividad"></h1>
                                        </div>
                                        <div class="col-8">
                                            <h5 class="text-start mt-3">Tiempo de actividad</h5>
                                            
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="../Controlador/accion/fpdf.php" class="btn btn-secondary btn-block mt-3">Imprimir tabata</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="empezar ">
        <div class="container ">
            <div class="row ">
                <div class="circulo col">
                    <h1 class="evento mb-5"></h1>
                    
                    
                </div>
            </div>
        </div>
        
    </div>
    <!-- Modal registro Tabata-->
    <div class="modal fade" id="modalRegistroTabata" tabindex="-1" role="dialog"
        aria-labelledby="modalInstruccionesCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegistroTabataLongTitle">Registrar Tabata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="post" action="../Controlador/accion/act_registroTabata.php">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre Tabata" required/>                            
                        </div>
                        <div class="form-group">
                            <input type="number" name="tPreparacion" class="form-control" placeholder="Tiempo De Preparacion" required/>                        
                        </div> 
                        <div class="form-group">
                            <input type="number" name="tActividad" class="form-control" placeholder="Tiempo De Actividad"required/>                            
                        </div>
                        <div class="form-group">
                            <input type="number" name="tDescanso" class="form-control" placeholder="Tiempo De Descanso"required/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="numSeries" class="form-control" placeholder="Numero De Series"required/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="numRondas" class="form-control" placeholder="Numero De Rondas"required/>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Registrar Tabata</button>
                    </form>
                </div>

            </div>
        </div>
        
    </div>
    
    <!-- Modal Editar Tabata-->
    <div class="modal fade" id="modalEditarTabata" tabindex="-1" role="dialog"
        aria-labelledby="modalInstruccionesCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarTabataLongTitle">Registrar Tabata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="post" action="../Controlador/accion/act_editarTabata.php" name="idform">
                        <div class="form-group">
                            <input type="text" name="id" style="display: none" class="form-control"/>                            
                        </div>
                        <div class="form-group">
                            <label for="nombreTabata">Nombre Tabata</label>
                            <input type="text" name="nombre" class="form-control"required/>                            
                        </div>
                        <div class="form-group">
                            <label for="tiempoDePreparacion">Tiempo De Preparacion</label>
                            <input type="number" name="tPreparacion" class="form-control" required/>                        
                        </div> 
                        <div class="form-group">
                            <label for="tiempoDeActividad">Tiempo De Actividad</label>
                            <input type="number" name="tActividad" class="form-control"required/>                            
                        </div>
                        <div class="form-group">
                            <label for="tiempoDeDescanso">Tiempo De Descanso</label>
                            <input type="number" name="tDescanso" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label for="numeroDeSeries">Numero De Series</label>
                            <input type="number" name="numSeries" class="form-control"required/>
                        </div>
                        <div class="form-group">
                            <label for="numeroDeRondas">Numero De Rondas</label>
                            <input type="number" name="numRondas" class="form-control"required/>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Editar Tabata</button>
                    </form>
                </div>

            </div>
        </div>
        
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/ajaxTabatas.js"></script>
    <script src="js/temporizador.js"></script>


</body>
</html>