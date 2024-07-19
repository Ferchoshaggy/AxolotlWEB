AOS.init({
    easing: 'ease-in-out-sine'
});


var push = false;

window.addEventListener("scroll", function () {

    var header = document.querySelector("header");
    if (push || window.scrollY > 0) {
        header.classList.add("abajo");
    } else {
        header.classList.remove("abajo");
    }

    //
})


$(document).ready(function () {
    $('.formData').submit(function (event) {
        event.preventDefault(); // Prevenir el envío normal del formulario

        // Obtener los datos del formulario
        var formData = $(this).serialize();

        // Enviar la solicitud AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function (response) {
                alert("Formulario enviado con exito");
                $('.formData').trigger('reset');


            },
            error: function (xhr, status, error) {
                // Mostrar un mensaje de error si la solicitud no fue exitosa
                console.error('Error al enviar el formulario');
            }
        });
    });
});


document.getElementById("but_001").addEventListener("click", () => {
    console.log("entro");
    if (push) {
        push = false;
    } else {
        push = true;
    }
    if (push || window.scrollY > 0) {
        var header = document.querySelector("header");
        header.classList.add("abajo");
    } else {
        var header = document.querySelector("header");
        header.classList.remove("abajo");
    }
})