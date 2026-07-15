document.addEventListener('DOMContentLoaded', function () {

    const botoesExcluir = document.querySelectorAll('.btn-excluir');

    botoesExcluir.forEach(function(botao) {

        botao.addEventListener('click', function(event) {

            if (!confirm('Deseja realmente excluir este registro?')) {
                event.preventDefault();
            }

        });

    });

});