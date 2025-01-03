const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
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
  fetch("../Conexion/api.php?accion=agregar",{
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
  events:"../Conexion/api.php"
  });
  calendar.render();
});