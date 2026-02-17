function validarFormulario() {

    // RADIO
    let radios = document.getElementsByName("genero");
    let radioSeleccionado = false;

    for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            radioSeleccionado = true;
            break;
        }
    }

    if (!radioSeleccionado) {
        alert("Selecciona un género");
        return false;
    }

    // CHECKBOX
    let checkboxes = document.getElementsByName("intereses[]");
    let checkboxMarcado = false;

    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checkboxMarcado = true;
            break;
        }
    }

    if (!checkboxMarcado) {
        alert("Selecciona al menos un interés");
        return false;
    }

    // SELECT
    let ciudad = document.getElementById("ciudad").value;

    if (ciudad === "") {
        alert("Selecciona una ciudad");
        return false;
    }

    // Si todo está bien
    return true;
}
