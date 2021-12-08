const cantidadDeUsuarios = document.getElementById("cantidadUsuarios")
const cantidadTemas = document.getElementById("cantidadTemas")
const cantidadSubtemas = document.getElementById("cantidadSubtemas")
const tituloSubtema = document.getElementById("tituloSubtema")
const ContenidoSubtema = document.getElementById("ContenidoSubtema")
const usuarioSubtema = document.getElementById("usuarioSubtema")
const tituloTema = document.getElementById("tituloTema")
const ContenidoTema = document.getElementById("ContenidoTema")
const usuarioTema = document.getElementById("usuarioTema")
// const remplazar = document.getElementById("remplazar")
// const remplazar = document.getElementById("remplazar")
//const remplazar = document.getElementById("remplazar")


const llamaSubtemas = () => {

    fetch("../backend/LlamadaSubtemas.php")
        .then(datos => datos.json())
        .then(datos => {
            let largo = datos.length;
            let buscar = 1;
            for (let dato of datos) {

                if (buscar == largo) {
                    console.log(dato)
                    tituloSubtema.textContent = dato.titulo
                    ContenidoSubtema.textContent = dato.titulo
                    usuarioSubtema.textContent = dato.nombre
                }

                buscar++


            }
            console.log("cantidad de sub temas: " + datos);
            cantidadSubtemas.textContent = datos.length;

        })

}

const llamaUsuarios = () => {
    fetch("../backend/LlamarUsuarios.php")
        .then(datos => datos.json())
        .then(datos => {

            cantidadDeUsuarios.textContent = datos.length;


        })


}

const llamatemas = () => {
    fetch("../backend/LlamadaTemas.php?tema=1")
        .then(datos => datos.json())
        .then(datos => {

            let largo = datos.length;
            let buscar = 1;
            for (let dato of datos) {

                if (buscar == largo) {
                    tituloTema.textContent = dato.titulo
                    ContenidoTema.textContent = dato.importancia
                    usuarioTema.textContent = dato.usuario
                    console.log(dato)
                }

                buscar++


            }

            // for (let dato of datos) {
            //     let contador = 0;
            //     let contador2 = 0;

            //     for (let index = 0; index < etiquetasFavoritas.length; index++) {
            //         if (dato.etiqueta == etiquetasFavoritas[index] || dato.etiqueta2 == etiquetasFavoritas[index] || dato.etiqueta3 == etiquetasFavoritas[index]) {
            //             contador++
            //         }

            //     }

            //     if (contador > 0) {
            //         contador2++


            //         const clone = templateTema.cloneNode(true);
            //         clone.querySelector(".nombreTema").textContent = dato.titulo;
            //         clone.querySelector(".importancia").textContent = dato.importancia;
            //         clone.querySelector("#idtema").value = dato.id_tema;
            //         let btn =clone.querySelector("#btnEnvio")
            //         btn.setAttribute("onclick","btnEnv('"+contador2+"')")
            //         let modal = clone.querySelector("#modal")
            //         modal.setAttribute("data-bs-target","#modal"+dato.id_tema)
            //         clone.querySelector("#exampleModal").id = "modal"+dato.id_tema
            //         let btntema = clone.querySelector("#btnAcordion")
            //         btntema.setAttribute("data-bs-target","#vertema"+dato.id_tema)
            //         btntema.setAttribute("aria-controls","vertema"+dato.id_tema)
            //         clone.querySelector("#ver").id = "vertema"+dato.id_tema
            //         let cantidad = 0;
            //         subtema.forEach(element => {
            //             if (element.id_tema == dato.id_tema) {

            //                 cantidad++
            //                 const clone2 = templateSubtema.cloneNode(true);
            //                 clone2.querySelector(".nombreSubtema").textContent = element.titulo;
            //                 clone2.querySelector(".nombreUsuario").textContent = element.nombre;
            //                 clone2.querySelector(".Contenido").textContent = element.texto;
            //                 clone2.querySelector(".cita").textContent = element.cita;
            //                 clone2.querySelector("#collapseThree").id = "id_tema" + element.id_subtema;
            //                 let cam = clone2.querySelector("#btnAcordion")
            //                 cam.setAttribute("aria-controls", "id_tema" + element.id_subtema);
            //                 cam.setAttribute("data-bs-target", "#" + "id_tema" + element.id_subtema);
            //                 fragment2.appendChild(clone2)
            //             }

            //         });
            //         clone.querySelector(".cantidad").textContent = cantidad;
            //         clone.querySelector(".accordion").appendChild(fragment2);
            //         fragment.appendChild(clone);
            //         listaTemas.appendChild(fragment)

            //     }


            //     // console.log("id tema:" + dato.id_tema);
            //     // console.log("titulo:" + dato.titulo);
            //     // console.log("texto:" + dato.importancia);
            //     // console.log("usuario:" + dato.usuario);



            // }

            console.log("cantidad de temas: " + datos.length);
            cantidadTemas.textContent = datos.length;
        })
}
llamaSubtemas();
llamatemas();
llamaUsuarios();