document.getElementById('encuestaForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    if (!validarFormulario()) {
        return; // Evita enviar el formulario si la validación falla
    }
    
    fetch(this.action, {
        method: this.method,
        body: new FormData(this),
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => {
        if (response.ok) {
            return response.text(); // Leer el texto de la respuesta
        } else {
            throw new Error('Error al guardar los datos.');
        }
    })
    .then(data => {
        alert(data); // Mostrar el texto de la respuesta
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al guardar los datos');
    });
});

// Esto es para hacer la validacion del formulario
function validarFormulario() {
    var festejas = document.querySelector('input[name="festejas"]:checked');
    var porque = document.getElementById("porque").value.trim();

    if (!festejas) {
        alert("Por favor selecciona si festejas el 5 de Mayo.");
        return false;
    }

    if (porque === "") {
        alert("Por favor proporciona una respuesta a por qué festejas o no el 5 de Mayo.");
        return false;
    }

    return true;
}
