let json = new Object();
let etiquetasFavoritas = [];

let subtema = [];
let temas = [];
const iduser = document.getElementById("iduser").value

const templateTema = document.getElementById("tema").content
const templateSubtema = document.getElementById("subtema").content
const fragment = document.createDocumentFragment()
const fragment2 = document.createDocumentFragment()
const listaTemas = document.getElementById("listaTemas")

let numeor = 0



document.addEventListener("DOMContentLoaded", () => {
    llamaEtiquetaFaborita();
    llamaSubtemas();
    llamatemas();
})

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

const llamaSubtemas = (idtema) => {

    fetch("../backend/LlamadaSubtemas.php")
        .then(datos => datos.json())
        .then(datos => {
            for (let dato of datos) {
                subtema.push(dato)

            }

        })

}



const llamatemas = () => {
    fetch("../backend/LlamadaTemas.php?tema=1")
        .then(datos => datos.json())
        .then(datos => {

            for (let dato of datos) {
                let contador = 0;

                for (let index = 0; index < etiquetasFavoritas.length; index++) {
                    if (dato.etiqueta == etiquetasFavoritas[index] || dato.etiqueta2 == etiquetasFavoritas[index] || dato.etiqueta3 == etiquetasFavoritas[index]) {
                        contador++
                    }

                }

                if (contador > 0) {


                    const clone = templateTema.cloneNode(true);
                    clone.querySelector(".nombreTema").textContent = dato.titulo;
                    clone.querySelector(".importancia").textContent = dato.importancia;
                    clone.querySelector("#idtema").value = dato.id_tema;
                    let btn =clone.querySelector("#btnEnvio")
                    btn.setAttribute("onclick","btnEnv('"+dato.id_tema+"')")
                    let modal = clone.querySelector("#modal")
                    modal.setAttribute("data-bs-target","#modal"+dato.id_tema)
                    clone.querySelector("#exampleModal").id = "modal"+dato.id_tema
                    let btntema = clone.querySelector("#btnAcordion")
                    btntema.setAttribute("data-bs-target","#vertema"+dato.id_tema)
                    btntema.setAttribute("aria-controls","vertema"+dato.id_tema)
                    clone.querySelector("#ver").id = "vertema"+dato.id_tema
                    let cantidad = 0;
                    subtema.forEach(element => {
                        if (element.id_tema == dato.id_tema) {

                            cantidad++
                            const clone2 = templateSubtema.cloneNode(true);
                            clone2.querySelector(".nombreSubtema").textContent = element.titulo;
                            clone2.querySelector(".nombreUsuario").textContent = element.nombre;
                            clone2.querySelector(".Contenido").textContent = element.texto;
                            clone2.querySelector(".cita").textContent = element.cita;
                            clone2.querySelector("#collapseThree").id = "id_tema" + element.id_subtema;
                            let cam = clone2.querySelector("#btnAcordion")
                            cam.setAttribute("aria-controls", "id_tema" + element.id_subtema);
                            cam.setAttribute("data-bs-target", "#" + "id_tema" + element.id_subtema);
                            fragment2.appendChild(clone2)
                        }

                    });
                    clone.querySelector(".cantidad").textContent = cantidad;
                    clone.querySelector(".accordion").appendChild(fragment2);
                    fragment.appendChild(clone);
                    listaTemas.appendChild(fragment)

                }


                // console.log("id tema:" + dato.id_tema);
                // console.log("titulo:" + dato.titulo);
                // console.log("texto:" + dato.importancia);
                // console.log("usuario:" + dato.usuario);



            }
        })
}











// const llamaEtiquetaFaborita = () => {
//     fetch("../backend/LlamadaEtiquetaFavorita.php")
//         .then(datos => datos.json())
//         .then(datos => {
//             for (let dato of datos) {

//                 if (dato.id_usuario == iduser) {
//                     etiquetasFavoritas.push(dato.nombre_etiqueta);
//                 }

//             }
//         })

// }

// const llamatemas = () => {
//     fetch("../backend/LlamadaTemas.php?tema=1")
//         .then(datos => datos.json())
//         .then(datos => {
//             // console.log(datos)
//             let largo = etiquetasFavoritas.length;
//             let y=0
//             for (let dato of datos) {

//                 if (dato.etiqueta == etiquetasFavoritas[]) {

//                 }

//                 if (dato.etiqueta == etiquetasFavoritas[0] || dato.etiqueta == etiquetasFavoritas[1] || dato.etiqueta == etiquetasFavoritas[2] || dato.etiqueta2 == etiquetasFavoritas[0] || dato.etiqueta2 == etiquetasFavoritas[1] || dato.etiqueta2 == etiquetasFavoritas[2] || dato.etiqueta3 == etiquetasFavoritas[0] || dato.etiqueta3 == etiquetasFavoritas[1] || dato.etiqueta3 == etiquetasFavoritas[2]) {

//                     templateTema.querySelector(".nombreTema").textContent = dato.titulo;
//                     templateTema.querySelector(".importancia").textContent = dato.importancia;
//                     let i = 1;
//                     console.log(subtema)
//                     subtema.forEach(array => {

//                         let templateSubtema = document.getElementById("subtema").content
//                         let fragment2 = document.createDocumentFragment()

//                         let clone2 = templateSubtema.cloneNode(true);
//                         clone2.querySelector(".nombreSubtema").textContent = array.titulo;
//                         clone2.querySelector(".nombreUsuario").textContent = array.nombre;
//                         clone2.querySelector(".Contenido").textContent = array.texto;
//                         clone2.querySelector(".cita").textContent = array.cita;
//                         fragment2.appendChild(clone2)

//                         if (array.id_tema.value == dato.id_tema.value) {

//                             templateTema.querySelector(".accordion").appendChild(fragment2)
//                             // fragment2.removeChild(clone2)

//                         }


//                     });
//                     // for(let array of subtema){
//                     //     // templateSubtema.querySelector(".nombreSubtema").textContent = array.titulo;
//                     //     // templateSubtema.querySelector(".nombreUsuario").textContent = array.nombre;
//                     //     // templateSubtema.querySelector(".Contenido").textContent = array.texto;
//                     //     // templateSubtema.querySelector(".cita").textContent = array.cita;
//                     //     console.log(array)
//                     // }


//                     const clone = templateTema.cloneNode(true);
//                     fragment.appendChild(clone);









//                     // console.log("id tema:" + dato.id_tema);
//                     // console.log("titulo:" + dato.titulo);
//                     // console.log("texto:" + dato.importancia);
//                     // console.log("usuario:" + dato.usuario);

//                 }

//             }
//             listaTemas.appendChild(fragment)
//             // console.log(subtema);


//         })
// }


// const llamaSubtemas = (idtema) => {

//     fetch("../backend/LlamadaSubtemas.php")
//         .then(datos => datos.json())
//         .then(datos => {
//             for (let dato of datos) {
//                 console.log(dato);

//                 // templateSubtema.querySelector(".nombreSubtema").textContent = dato.titulo;
//                 // templateSubtema.querySelector(".nombreUsuario").textContent = dato.nombre;
//                 // templateSubtema.querySelector(".Contenido").textContent = dato.texto;
//                 // templateSubtema.querySelector(".cita").textContent = dato.cita;

//                 // const clone2 = templateSubtema.cloneNode(true);
//                 // fragment2.appendChild(clone2)
//                 // console.log(dato)
//                 subtema.push(dato)


//             }
//             // templateTema.querySelector(".accordion").appendChild("fragment2")
//         })

// }


const cargaTemas = () => {





}