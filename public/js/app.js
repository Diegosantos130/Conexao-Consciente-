document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form[data-validate]');
    if (!form) return;
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
