/**
 * MUESTRA EL FORMULARIO ADECUADO PARA CREAR UN AULA: NOMBRE Y ADICION DE ALUMNOS
 * Permie anadir alumnos a otra tabla y los pinta como valores ocultos del formulario
 * "alumnosAAnadir para ser recuperados despues en php
 */
var cuerpoAdded;
var formulario;
var cuerpoAlumnos;
function cargar() {
    var primerElemento = true;

    var tablaAlumnos = document.getElementById('tablaAlumnos'); //Tabla que contiene a todos los alumnos
    cuerpoAlumnos = document.querySelector('#tablaAlumnos tbody')
    var tablaAdded = document.getElementById('tablaAdded');     //Tabla que contiene a los alumnos anadidos
    cuerpoAdded = document.querySelector('#tablaAdded tbody');
    formulario = document.getElementById('formularioAula'); //Formulario con el boton aceptar y los IDs de los alumnos anadidos

    var caption = document.querySelector('#tablaAdded caption');        //Caption de la tabla anadidos
    var cabezaTablaAdded = document.querySelector('#tablaAdded thead'); //Cabecera de la tabla anadidos

}

/**
 * Función llamada al hacer click en "anadir", recoge el id del elemento para acceder a la fila en que se encuentra
 * Añade al formulario un atributo oculto que corresponde con su id
 * @param {*} idElemento 
 */
function anadir(idElemento) {
    //Recoge el elemento
    var e = document.getElementById(idElemento);

    //Recoge la fila
    var fila = e.parentNode.parentNode;
    //Cambia el boton
    fila.lastChild.innerHTML = '<button id="' + idElemento + '" onClick="retirar(this.id)" class="btn btn-warning btn-sm" >Retirar</button>';

    //Cambia la fila de tabla
    cuerpoAdded.appendChild(fila);

    //Crea el atributo oculto que llevara la informacion del alumno y lo añade al formulario
    var atributoOculto = document.createElement('input');
    atributoOculto.setAttribute('type', 'hidden');
    atributoOculto.setAttribute('name', 'alumnosAula[]');
    atributoOculto.setAttribute('value', idElemento);
    formulario.appendChild(atributoOculto);
}

/**
 * Recoge el id del elemento para acceder a la fila en que se encuentra y lo cambia de sitio
 * Retira del formulario el atributo oculto que corresponda con su id
 * @param {*} idElemento 
 */
function retirar(idElemento) {
    //Recoge el elemento
    var e = document.getElementById(idElemento);

    //Recoge la fila
    var fila = e.parentNode.parentNode;
    //Cambia el boton
    fila.lastChild.innerHTML = '<button id="' + idElemento + '" onClick="anadir(this.id)" class="btn btn-info btn-sm" >Retirar</button>';

    //Cambia la fila de tabla
    cuerpoAlumnos.appendChild(fila);

    //Busca el atributo oculto que lleva la informacion del alumno y lo retira
    var alumnosAdded = document.querySelectorAll('#formularioAula input');
    for (var i = 0; i < alumnosAdded.length; i++) {
        if (alumnosAdded[i].getAttribute('type') == 'hidden' && alumnosAdded[i].getAttribute('value') == idElemento) {
            alumnosAdded[i].remove();
        }
    }
}