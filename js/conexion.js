

function buscarEntradasA(){
    var texto = document.getElementById("buscador").value;
    var xmlhttp = new XMLHttpRequest();
    let lista = [];
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            lista = JSON.parse(this.responseText); 
            contenido = "";
       for (var i = 0; i < lista.length; i++) {
        contenido += "<tr><td>" + 
        lista[i].id + "</td><td>" + 
        lista[i].Nombre + "</td><td>" + 
        lista[i].Apellido + "</td><td>" + 
    
        lista[i].entrada + "</td><td>" + 
        lista[i].salida + "</td><td>" +
        "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' onclick='updateEntradaA (" + lista[i].id + ")'>"+
        "Entrada</button></td><td><button type='button' class='btn btn-danger' onclick='updateSalidaA (" + lista[i].id + ")'>Salida</button></td></tr>";
    }
    
    document.getElementById("tablaBody").innerHTML = contenido;
    definirBotones();
        }
    };
    
    xmlhttp.open("GET", "views/buscar.php?texto=" + texto, true);
    xmlhttp.send();
}

function updateSalidaA($id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            buscarEntradasA();
        }
    };
    xmlhttp.open("GET", "views/updateSalida.php?id=" + $id, true);
    xmlhttp.send();
}
function updateEntradaA($id){
    var xmlhttp = new XMLHttpRequest();
    $lista = [];
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            buscarEntradasA();
        }
    };
    xmlhttp.open("GET", "views/updateEntrada.php?id=" + $id, true);
    xmlhttp.send();
    
}
var botonesSalidaSel = [];

document.addEventListener("DOMContentLoaded", function(event) { 
    buscarEntradasA();
  });
    
    










