//CLASE EN ES6
class GestionAula {
    //Recibe el id de los elementos a cargar
    constructor(cuerpoAlumnos, cuerpoAdded, formulario) {
        this.cuerpoAlumnos = document.querySelector(cuerpoAlumnos);
        this.cuerpoAdded = document.querySelector(cuerpoAdded);
        this.formulario = document.getElementById(formulario);        
    }

    /**
     * Retira la fila del elemento de la tabla de alumnos y la mete en alumnos anadidos
     * Anade un atributo oculto al formulario con el id para ser recuperado despues por php
     * @param {*} idElemento 
     */
    anadir(idElemento) {
        //Recoge el elemento
        var e = document.getElementById(idElemento);

        //Recoge la fila
        var fila = e.parentNode.parentNode;
        //Cambia el boton
        fila.lastChild.innerHTML = '<button id="' + idElemento + '" onClick="retirar(this.id)" class="btn btn-warning btn-sm" >Retirar</button>';

        //Cambia la fila de tabla
        this.cuerpoAdded.appendChild(fila);

        //Crea el atributo oculto que llevara la informacion del alumno y lo añade al formulario
        var atributoOculto = document.createElement('input');
        atributoOculto.setAttribute('type', 'hidden');
        atributoOculto.setAttribute('name', 'alumnosAula[]');
        atributoOculto.setAttribute('value', idElemento);
        this.formulario.appendChild(atributoOculto);
    }

    /**
     * Retira la fila del elemento de la tabla de alumnos anadidos y la mete en alumnos
     * Retira el atributo oculto con el id
     * @param {*} idElemento 
     */
    retirar(idElemento) {
        //Recoge el elemento
        var e = document.getElementById(idElemento);

        //Recoge la fila
        var fila = e.parentNode.parentNode;
        //Cambia el boton
        fila.lastChild.innerHTML = '<button id="' + idElemento + '" onClick="anadir(this.id)" class="btn btn-info btn-sm" >Retirar</button>';

        //Cambia la fila de tabla
        this.cuerpoAlumnos.appendChild(fila);

        //Busca el atributo oculto que lleva la informacion del alumno y lo retira
        var alumnosAdded = document.querySelectorAll('#formularioAula input');
        for (var i = 0; i < alumnosAdded.length; i++) {
            if (alumnosAdded[i].getAttribute('type') == 'hidden' && alumnosAdded[i].getAttribute('value') == idElemento) {
                alumnosAdded[i].remove();
            }
        }
    }
}

var gestion;

function cargar() {
    gestion = new GestionAula('#tablaAlumnos tbody','#tablaAdded tbody','formularioAula');
}

//Llama a la funcion anadir del objeto
function anadir(idElemento) {
    gestion.anadir(idElemento);
}

//Llama a la funcion retirar del objeto
function retirar(idElemento) {
    gestion.retirar(idElemento);
}