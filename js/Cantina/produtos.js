// Botão Editar
const editarButton = document.getElementsByClassName("editar");
for (let i = 0; i < editarButton.length; i++) {
    editarButton[i].addEventListener('click', function (e) {
        alert('Editar');
    })
}

// Botão Excluir
const excluirButton = document.getElementsByClassName("excluir");
for (let i = 0; i < excluirButton.length; i++) {
    excluirButton[i].addEventListener('click', function(e) {
        alert('Excluido');
    });
}