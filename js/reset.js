window.addEventListener('load', function() {
    // Seleciona todos os formulários na página
    var forms = document.querySelectorAll('form');
    forms.forEach(function(form) {
        // Reseta cada formulário
        form.reset();
    });
});
console.log('script carregado');