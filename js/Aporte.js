const titulo = document.getElementById("floatingInput");
const texto = document.getElementById("floatingTextarea2");
const btnEnvio = document.getElementById("btnEnvio");
const enviar = document.getElementById("enviar");

let tituloIngresado = false;
let textoIngresado = false;


btnEnvio.addEventListener("click", () => {
    let contenidoTitulo = titulo.value;
    let arrayTitulo = validadorTexto(contenidoTitulo);
    let contenidoTexto = texto.value;
    let arrayTexto = validadorTexto(contenidoTexto);

    if (contenidoTexto.length > 1 && contenidoTitulo.length > 1) {
        if (arrayTitulo.length > 1) {
            alert("el contenido que usted intenta ingresar en el titulo tiene palabras no aptas, estas pasabas son: " + arrayTitulo)
            tituloIngresado = false;
        } else {
            tituloIngresado = true;
        }

        if (arrayTexto.length) {
            alert("el contenido que usted intenta ingresar en la importancia tiene palabras no aptas, estas pasabas son: " + arrayTexto)
            textoIngresado = false;
        } else {
            textoIngresado = true;
        }

        console.log("esta en el if")
    } else {
        if (contenidoTitulo.length <= 1) {
            alert("debe ingresar el titulo");
            tituloIngresado = false

        }

        if (contenidoTexto.length <= 1) {
            alert("debe ingresar la importancia");
            textoIngresado = false;
        }
        console.log("esta en el else")


    }

    if (tituloIngresado == true && textoIngresado == true) {
        let valor = confirm("esta seguro que desea publicar este contenido")
        if (valor) {

            enviar.click();
        }
    }



})