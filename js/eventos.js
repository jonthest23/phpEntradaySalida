
var botonesEntradaSel = [];



document.getElementById("buscador").addEventListener("keyup", () => {
    buscarEntradasA();
    
});
function definirBotones(){
    let index = 0;
    let datos = document.getElementById('tablaBody').getElementsByTagName('tr');
    let botonesSalida = document.getElementsByClassName('btn-danger');
    let botonesEntrada = document.getElementsByClassName('btn-primary');
    for (let i = 0; i < datos.length; i++) {
        botonesSalida[i].addEventListener('click', () => {
            id = datos[i].getElementsByTagName('td')[0].innerText;
            botonesSalidaSel.push(id);
            index = botonesEntradaSel.indexOf(id);
            if(index > -1){
            botonesEntradaSel.splice(index, 1);
            }
        });
        if(botonesSalidaSel.includes(datos[i].getElementsByTagName('td')[0].innerText)){
            botonesSalida[i].disabled = true;
        }
        botonesEntrada[i].addEventListener('click', () => {
            id = datos[i].getElementsByTagName('td')[0].innerText;
            botonesEntradaSel.push(id);
            index = botonesSalidaSel.indexOf(id);
            if(index > -1){
            botonesSalidaSel.splice(index, 1);
            }
        });
        if(botonesEntradaSel.includes(datos[i].getElementsByTagName('td')[0].innerText)){
            botonesEntrada[i].disabled = true;
        }

    
}
}

