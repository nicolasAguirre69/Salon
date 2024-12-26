<!doctype html>
<html lang="es">
    <head>
        <title>Agenda</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
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
        <div class="container">
            <!-- div calendario-->
            <div class="col-md-8 offset-md-2">
                <div id='calendar'></div>
            </div> 
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
        </div>
    </body>
</html>
<!-- Bootstrap JavaScript Libraries -->|
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
<script>
    function agregarEvento(){
        var evento = new FormData();
        evento.append("id",document.getElementById('id').value);
        evento.append("title",document.getElementById('titulo').value);
        evento.append("descripcion",document.getElementById('descripcion').value);
        evento.append("color",document.getElementById('color').value);
        evento.append("fecha",document.getElementById('fecha').value);
        evento.append("hora",document.getElementById('hora').value);
    }
    var modalEvento;
    modalEvento= new bootstrap.Modal(document.getElementById('modalEvento'),{keyboard:false});
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale:"es",
        headerToolbar:{
            left:'prev,next',
            center: 'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
        },
        dateClick : function(informacion){
            // verificamos que en realidad al seleccionar la fecha: 
            // alert("selecciono: "+informacion.dateStr);
            modalEvento.show();
        },
        events:"api.php"
        });
        calendar.render();
    });
</script>