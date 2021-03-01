<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->

        <title>Crear Preguntas</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="../css/mdb.min.css">
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/miestilo.css">
        <link rel="stylesheet" href="../css/estilos.css">


    </head>
    <body>
        <div class="container-fluid principal p-0 m-0">
            <?php include '../Recursos/header.php'; ?>
            <div class="pt-5"></div>
            <main class="row col-12 align-items-center justify-content-center p-4">
                
                <div class="container mt-5 d-flex flex-column border" >
                <h3 class="text-center mt-2">Tipo de pregunta</h3>
                    <div class="row">
                        <div class="col-md-6 mx-auto mt-1">
                            <form action="../Controladores/controladorPrincipal.php" method="POST" name="pregunta">
                                <select class="browser-default custom-select" name="preguntas"  onchange="this.form.submit()">
                                    <?php
                                    if (!isset($_SESSION['tipopregunta'])) {
                                        ?>
                                        <option disabled selected>Selecciona una opción</option>
                                        <option value="1">Numerico</option>
                                        <option value="2">Desarrollo</option>
                                        <option value="3">Opciones</option>
                                        <?php
                                    } else {

                                        $tipo = $_SESSION['tipopregunta'];
                                        switch ($tipo) {
                                            case 1:
                                                ?>
                                                <option value="1" selected>Numerico</option>
                                                <option value="2">Desarrollo</option>
                                                <option value="3">Opciones</option>

                                                <?php
                                                break;
                                            case 2:
                                                ?>
                                                <option value="1" >Numerico</option>
                                                <option value="2" selected>Desarrollo</option>
                                                <option value="3">Opciones</option>
                                                <?php
                                                break;
                                            case 3:
                                                ?>
                                                <option value="1" >Numerico</option>
                                                <option value="2" >Desarrollo</option>
                                                <option value="3" selected>Opciones</option>
                                            <?php
                                        }
                                        ?>

                                        <?php
                                    }
                                    ?>

                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                                <div class="text-center mt-3">
                                    <h3>Enunciado</h3>
                                    <textarea id="ta_resp_texto" name="titulo" placeholder="Enunciado de la pregunta" rows="5" class="w-100"></textarea>
                                </div>
                                <?php
                                if (isset($_SESSION['tipopregunta'])) {
                                    $tipo = $_SESSION['tipopregunta'];
                                    switch ($tipo) {
                                        case 1:
                                            ?>
                                            <div class="text-center">
                                                <h3>Respuesta</h3>
                                                <input type="number" id="num" name="numerico" class="w-50">
                                            </div>
                                            <?php
                                            break;
                                        case 3:
                                            ?>
                                            <div class="text-center">
                                                <h3>Seleccione las respuestas correctas</h3>
                                                <label class="mr-2"><input type="checkbox" id="comboA" name="comboa">
                                                    <input type="text" name="inputa"></label>
                                                <label class="ml-2"><input type="checkbox" id="comboB" name="combob">
                                                    <input type="text" name="inputb"></label>
                                            </div>
                                            <div class="text-center">
                                                <label class="mr-2"><input type="checkbox" id="comboC" name="comboc">
                                                    <input type="text" name="inputc"></label>
                                                <label class="ml-2"><input type="checkbox" id="comboD" name="combod">
                                                    <input type="text" name="inputd"></label>
                                            </div>
                                            <?php
                                            break;
                                    }
                                } else {
                                    $_SESSION['tipo'] = 'texto';
                                    ?>
                                    <div class="text-center">
                                        <h3>Respuesta</h3>
                                        <textarea id="resp" name="respu" rows="5" class="w-100 form-control"></textarea>
                                    </div>
                                    <?php
                                }
                                ?>
                                <h3 class="text-center mt-2">Puntuación</h3>
                                <div class="row w-100 mt-2 mx-auto">
                                    <input type="number" name="valor" class="col-md-4 mx-auto form-control" placeholder="Puntuación" required> 
                                </div>
                                
                                <div class="text-center mt-3 w-100">
                                    <button type="submit" name="anadirPregunta" class="btn btn-info btn-block w-100 mb-3">Añadir pregunta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            <?php include '../Recursos/footer.php'; ?>
        </div>
    </body>

    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
</html>
