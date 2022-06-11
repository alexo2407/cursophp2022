/* ***************************************************************
    VARIABLES 
 *************************************************************** */
const entrada_buscar = document.getElementById('buscador');

// invocamos el Event listener
eventListeners();


function eventListeners() {

    // le agregamos un evento al input de tipo tecla
    entrada_buscar.addEventListener("keyup", enviarAjax);

}


function enviarAjax(e) {
    // validar que sean texto 
    if (this.type === 'text') {
        console.log("estamos escribiendo");
        buscadorAjax(this);
    }
    else {
        console.log('no es entrada de texto');
    }


}



/* ***************************************************************
BUSCARLO EN AJAX
 *************************************************************** */

function buscadorAjax(campo) {
    // console.log('dentro del input name');
    const busqueda = campo.value;

    const datos = new FormData();
    
    // mandamos la variable post llamada buscarCurso
    datos.append("buscarCursos", busqueda);

    //instanciamos la comunicacion para crear el objeto
    const xhr = new XMLHttpRequest();

    // abrimos la conexión
    xhr.open('POST', 'ajax.php', true);

    //una vez que carga 
    xhr.onload = function () {
        //status 200:correcto  |  403: prohibido  | 404: No encontrado
        if (this.status === 200) {

            // JSON.parse analiza una cadena de texto como JSON, transformando opcionalmente  el valor producido por el análisis.
            // const cursoencontrado = JSON.parse(this.responseText);
            // console.log(JSON.parse(this.responseText));
            document.getElementById('app').innerHTML = this.responseText;

            //    const htmlTemplate = `${cursoencontrado.1}`;



        } else {
            console.log("no se completo la accion");
        }
    }

    //enviar el request

    xhr.send(datos);

    // xhr.onreadystatechange = function()
    // {
    //     //ALT + 96 `
    //     console.log(`Estado ${this.readyState}`);

    //     if (this.readyState === 4 && this.status === 200) {
    //         console.log(this.responseText);
            
    //     }
    // }



}
