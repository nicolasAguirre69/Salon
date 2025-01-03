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

        for(var valor of evento.values()){
            console.log(valor)
        }
        fetch("Conexion/api.php?accion=agregar",{
        method:"POST",
        body:evento
       })
       .then(data =>{
        console.log(data);
       })
       .cath(error=>{
        console.log(error);
       })
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
            //alert("selecciono: "+informacion.dateStr);
            modalEvento.show();
        },
        events:"Conexion/api.php"
        });
        calendar.render();
    });
</script>