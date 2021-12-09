let etiquetasFavoritas = [];
let idetiquetas = [];
const iduser = document.getElementById("iduser").value
const ingresarEtiquetas = document.getElementById("InserEtiquetas")

const template = document.getElementById("etiquetas").content
const fragment = document.createDocumentFragment();


const btnGuardaEtiqueta = document.getElementById("GuardarEtiqueta");

document.addEventListener("DOMContentLoaded", () => {
    llamaEtiquetaFaborita();
    llamaEtiqueta();

})

const llamaEtiqueta = () => {
    fetch("../backend/LlamadaEtiqueta.php")
        .then(datos => datos.json())
        .then(datos => {
            for (let dato of datos) {
                idetiquetas.push(dato.id_etiqueta)
                let contador = 0;
                console.log(etiquetasFavoritas);

                for (let index = 0; index < etiquetasFavoritas.length; index++) {
                    if (dato.nombre_etiqueta == etiquetasFavoritas[index]) {
                        contador++
                    }

                }

                const clon = template.cloneNode(true);
                if (contador >= 1) {
                    let checked = clon.querySelector("#remplazar")
                    checked.setAttribute("checked", "checked")

                }
                clon.querySelector("#remplazar").id = "idetiqueta" + dato.id_etiqueta
                let fo = clon.querySelector("#nombreEtiqueta")
                fo.setAttribute("for", "idetiqueta" + dato.id_etiqueta)
                clon.querySelector("#nombreEtiqueta").textContent = dato.nombre_etiqueta

                clon.querySelector("#nombreEtiqueta").id = "nombreetiqueta" + dato.id_etiqueta


                fragment.appendChild(clon)
            }
            ingresarEtiquetas.appendChild(fragment)

        })

}

const llamaEtiquetaFaborita = () => {
    fetch("../backend/LlamadaEtiquetaFavorita.php")
        .then(datos => datos.json())
        .then(datos => {
            for (let dato of datos) {

                if (dato.id_usuario == iduser) {
                    etiquetasFavoritas.push(dato.nombre_etiqueta);
                }

            }
        })

}

btnGuardaEtiqueta.addEventListener("click", () => {

    let j = [];
    const inputs = document.querySelectorAll("input")
    const label = document.querySelectorAll("label")
    let envioEtiqueta = document.getElementById("envioEtiqueta")

    for (let index = 1; index < inputs.length; index++) {
        if (inputs[index].checked) {
            j.push(idetiquetas[index - 1])
            // console.log(label[index-1].textContent);
            // console.log("id etiqueta = "+ idetiquetas[index-1] );
            // console.log("el elemento " + inputs[index].value + " esta con checked");
        }

    }

    if (j.length > 0) {

        const inputjson = document.getElementById("jso")
        inputjson.value = j;

        envioEtiqueta.click();
    }




})