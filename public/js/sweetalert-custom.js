// Configuración personalizada para SweetAlert2
// Este archivo se carga después de que SweetAlert2 esté disponible

document.addEventListener('DOMContentLoaded', function () {
    // Manejar todos los formularios con clase 'confirm'
    const confirmForms = document.querySelectorAll('.confirm');

    confirmForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
