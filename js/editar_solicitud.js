const editarID = document.getElementById("id")
const editarSolicitud = document.getElementById("solicitud")
const editarDepartamento = document.getElementById("departamento")
const editarFecha = document.getElementById("fecha")
const editarEstado = document.getElementById("estado")
const editarEquipo = document.getElementById("equipo")

const table = document.getElementById("tabla")

table.addEventListener("click",(e)=>{
    if(e.target.tagName === "BUTTON"){
        const id = e.target.parentElement.parentElement.children[6].innerText
        const solicitud = Number(e.target.parentElement.parentElement.children[1].innerText);
        const departamento = e.target.parentElement.parentElement.children[3].innerText.trim();
        const fecha = e.target.parentElement.parentElement.children[4].innerText.trim();
        const equipo = e.target.parentElement.parentElement.children[2].innerText.trim();
        const estado = e.target.parentElement.parentElement.children[5].innerText.trim();
        console.log(editarDepartamento.value,departamento)

        editarID.value = id
        editarSolicitud.value = solicitud
        editarDepartamento.value = departamento
        editarFecha.value = fecha
        editarEstado.value = estado
        editarEquipo.value = equipo
        
        console.log(editarID.value,id)
        console.log(editarSolicitud.value,solicitud)
        console.log(editarFecha.value, fecha)
        console.log(editarEstado.value,estado)
        console.log(editarEquipo.value, equipo)
    }
})