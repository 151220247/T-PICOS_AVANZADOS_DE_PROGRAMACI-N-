const formulario = document.getElementById('formulario');

if(formulario){

    formulario.addEventListener('submit', function(e){

        e.preventDefault();

        alert('Compra realizada correctamente');

        formulario.reset();
    });
}