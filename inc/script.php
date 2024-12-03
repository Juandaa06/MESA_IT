<script>
    let categoria = ['Periféricos','C4C', 'Correos Kaeser', 'Impresora', 'Instalación de Software', 'Laptops', 'Líneas Telefónicas', 'Proyectos Tecnológicos','SAP', 'Teléfonos', 'Windows'];
    let subcategoria = ['Monitor','Mouse','Teclado','Otros...','Fallas Generales', 'Agregar a Grupos', 'Cambio Contraseña', 'Cuenta Delegada', 'Fallas Generales', 'Instalación', 'Solicitud de Resma', 'Solicitud de Tóner', 'Mind Manager', 'Office', 'StepOver', 'Ves004', 'Otros Softwares...', 'Fallas del Hardware', 'Fallas del Software', 'Hurto', 'Mantenimiento', 'Cambio de Plan', 'Cambio de Plástico (SIM CARD)', 'Falla del plan de datos', 'Nuevas Líneas', 'Portabilidad', 'Roaming', 'Soporte Proyectos Internos', 'Cambio de Contraseña', 'Desbloqueo', 'Transacciones','Otros Fallos...', 'Fallas Generales', 'Nuevo Celular', 'Cambio de Contraseña'];

    let motivoReport = document.getElementById('motivoReport');
    let motivoCategoria = document.getElementById('motivoCategoria');

    function recorrerMotivo(motivo, valores){
        
        motivo.innerHTML = '<option selected disabled value ="">Seleccione</option>';

        for(let index of valores){
            motivo.innerHTML+= `<option>${index}</option>`;
        }
    }

    function llenarMotivo(){
        recorrerMotivo(motivoReport,categoria)
    }

    llenarMotivo();

    motivoReport.addEventListener('change', (e)=>{
        let dato = e.target.value;

        switch(dato){
            case 'Periféricos':
                recorrerMotivo(motivoCategoria, subcategoria.slice(0,4));
            break;
            case 'C4C':
                recorrerMotivo(motivoCategoria, subcategoria.slice(4,5));
            break;
            case 'Correos Kaeser':
                recorrerMotivo(motivoCategoria, subcategoria.slice(5,8));
            break;
            case 'Impresora':
                recorrerMotivo(motivoCategoria, subcategoria.slice(8,12));
            break;
            case 'Instalación de Software':
                recorrerMotivo(motivoCategoria, subcategoria.slice(12,17));
            break;
            case 'Laptops':
                recorrerMotivo(motivoCategoria, subcategoria.slice(17,21));
            break;
            case 'Líneas Telefónicas':
                recorrerMotivo(motivoCategoria, subcategoria.slice(21,27));
            break;
            case 'Proyectos Tecnológicos':
                recorrerMotivo(motivoCategoria, subcategoria.slice(27,28));
            break;
            case 'SAP':
                recorrerMotivo(motivoCategoria, subcategoria.slice(28,32));
            break;
            case 'Teléfonos':
                recorrerMotivo(motivoCategoria, subcategoria.slice(32,34));
            break;
            case 'Windows':
                recorrerMotivo(motivoCategoria, subcategoria.slice(34,35));
            break;
            default:
            break;
        }
    })  

    document.addEventListener('DOMContentLoaded', function () {

    const inputs = document.querySelectorAll('#formulario input, #formulario select, #formulario textarea');

    // Agregar eventos a todos los inputs
    inputs.forEach((input) => {
        input.addEventListener('input', validar);
    });

    // Mostrar alerta en campos obligatorios
    function validar(e) {
        if (e.target.value.trim() === '') {
        mostrarAlerta('El campo es obligatorio*', e.target.parentElement);
        return;
        }

        limpiarAlerta(e.target.parentElement);
    }

    // Crea el SPAN de error
    function mostrarAlerta(mensaje, referencia) {
        limpiarAlerta(referencia);

        const error = document.createElement('SPAN');
        error.textContent = mensaje;
        error.classList.add('alerta');
        error.style.color = '#818c97';
        error.style.fontStyle = 'italic';
        error.style.fontSize = '13px';

        referencia.appendChild(error);
    }

    // Limpiar alertas previas
    function limpiarAlerta(referencia) {
        const alerta = referencia.querySelector('.alerta');
        if (alerta) {
        alerta.remove();
        }
    }
    });

    document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("submit-button").addEventListener("click", () => {
    // Obtener el spinner
    const spinner = document.getElementById("spinner-container");
    if (!spinner) {
      console.error("No se encontró el elemento con id 'spinner-container'");
      return; // Detener si no existe
    }

    // Mostrar Spinner
    spinner.style.display = "flex";

    // Alerta con SweetAlert
    // Swal.fire({
    //     position: "top-end",
    //     icon: "success",
    //     title: "Your work has been saved",
    //     showConfirmButton: false,
    //     timer: 1500
    // });
  });
});

</script>