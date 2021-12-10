
const correo = document.getElementById("floatingInput");
const nombre = document.getElementById("floatingInput2");
const pass = document.getElementById("floatingPassword");
const pass2 = document.getElementById("floatingPassword2");
const encriptada = document.getElementById("passencrip");

const btn = document.getElementById("registrarme");
const btnenvio = document.getElementById("envio")

btn.addEventListener("click", ()=>{
    console.log("hola");
    if (pass.value != pass2.value) {
        alert("las claves no coinciden")
        
    } else {
        encriptada.value = md5(pass.value)
        btnenvio.click()

    }
})

