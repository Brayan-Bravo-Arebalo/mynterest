let palabrasOfensivas = [];

fetch("../backend/palabrasOfensivas.json")
    .then(datos => datos.json())
    .then(datos => {
        for (let i = 0; i < datos.palabras.length; i++) {
            palabrasOfensivas.push(datos.palabras[i])
        }

    })

const validadorTexto = (texto) => {
    let palabras = []

    for (let i = 0; i < palabrasOfensivas.length; i++) {
        let valor = texto.search(palabrasOfensivas[i]);
        if (valor > 1) {
            palabras.push(palabrasOfensivas[i]);
        }
    }



    return palabras

}