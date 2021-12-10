const btnEnv = (ele) => {
    var el = ele;
    console.log(ele);
    const enviar = document.querySelectorAll(".enviar")
    const comprobarinputs = document.querySelectorAll(".comprobar")
    let inputs = comprobarinputs[el - 1].querySelectorAll("input")
    let textarea = comprobarinputs[el - 1].querySelector("textarea")

    let titulo = false;
    let text = false;
    let cita = false;

    let valorTitulo = inputs[0].value;
    let valorTexto = textarea.value
    let valorCita = inputs[1].value

    let respuestaTitulo = validadorTexto(valorTitulo);
    let respuestaTexr = validadorTexto(valorTexto);
    let respuestaCita = validadorTexto(valorCita)

    console.log(inputs[0].value);
    console.log(textarea.value)
    console.log(inputs[1].value);

    if (valorTitulo.length > 1 && valorTexto.length > 1 && valorCita.length > 1) {
        if (respuestaTitulo.length >= 1) {
            alert("el contenido que usted intenta ingresar en el titulo tiene palabras no aptas, estas pasabas son: " + respuestaTitulo)

            titulo = false;
        } else {
            titulo = true;
        }

        if (respuestaTexr.length >= 1) {
            alert("el contenido que usted intenta ingresar en la importancia tiene palabras no aptas, estas pasabas son: " + respuestaTexr)
            text = false;
        } else {
            text = true;
        }

        if (respuestaCita.length >= 1) {
            alert("el contenido que usted intenta ingresar en la cita tiene palabras no aptas, estas pasabas son: " + respuestaCita)
            cita = false;
        } else {
            cita = true;
        }

        console.log("esta en el if")
    } else {
        if (valorTitulo.length < 1) {
            alert("debe ingresar el titulo");
            tituloIngresado = false

        }

        if (valorTexto.length <= 1) {
            alert("debe ingresar contendio");
            textoIngresado = false;
        }

        if (valorCita.length <= 1) {
            alert("debe ingresar la cita");
            textoIngresado = false;
        }
        console.log("esta en el else")


    }

    if (titulo == true && text == true && cita == true) {
        let valor = confirm("esta seguro que desea publicar este contenido")
        console.log(respuestaTitulo);
        console.log(respuestaTexr);
        console.log(respuestaCita);
        if (valor) {

            enviar[el - 1].click();
        }
    }



    //enviar[el-1].click();

}