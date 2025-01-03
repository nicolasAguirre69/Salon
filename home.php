
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Menú lateral -->
        <?php require 'assets/menu.php'; ?>

        <!-- Contenido principal -->
        <main class="main-content">
            <div id="calendar"></div>
        </main>
    </div>
</body>
<!-- Modal Body-->
<div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Ingrese una nueva cita
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">ID:</label>
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">titulo</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId"placeholder="titulo"/>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha</label>
                            <input type="text" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="fecha"/>
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Hora</label>
                            <input type="time" class="form-control" name="hora" id="hora" aria-describedby="helpId" placeholder="hora"/>
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Descripcion</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Color</label>
                            <input type="color" class="form-control" name="color" id="color" aria-describedby="helpId" placeholder=""></div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" > Close </button>
                <button type="button" class="btn btn-primary" onclick="agregarEvento()">Save</button>
            </div>
        </div>
    </div>
</div>  
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
    ></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="js/home.js"></script>
</html>