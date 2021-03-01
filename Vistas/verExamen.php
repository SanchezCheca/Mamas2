<!DOCTYPE html>

<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Mi CSS -->
    <link rel="stylesheet" href="../css/estilos.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Recursos MDBootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Mis aulas - Mamas 2.0</title>

</head>

<body>
    <div class="container-fluid principal p-0 m-0">
        <?php include '../Recursos/header.php'; ?>
        <?php
        //Carga los datos del examen
        if (isset($_SESSION['examen'])) {
            $examen = $_SESSION['examen'];
        }
        if (isset($_SESSION['preguntas'])) {
            $preguntas = $_SESSION['preguntas'];
        }
        ?>
        <main class="row col-12 align-items-center justify-content-center p-4 d-flex">
            <h2>Examen: <?php echo $examen->getNombre(); ?></h2>
            <?php
            for ($i = 0; $i < count($preguntas); $i++) {
            ?>
                <div class="col-12 w-100 d-flex justify-content-center">
                    <!-- Cuerpo de la pregunta -->
                    <h4>Pregunta <?php echo $i . ': ' . $preguntas[$i]->getCuerpo(); ?></h4>
                    <?php
                    if ($preguntas[$i]->getTipo() == 1) {
                        //Pregunta de tipo NUMÉRICO
                    } else if  ($preguntas[$i]->getTipo() == 2) {
                        //Pregunta de tipo DESARROLLO
                    } else {
                        //Pregunta de tipo OPCIONES (DRAG & DROP)
                    }
                    ?>
                </div>

            <?php
            }
            ?>
        </main>
        <?php include '../Recursos/footer.php'; ?>
    </div>

</body>

</html>