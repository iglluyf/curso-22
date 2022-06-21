$( document ).ready(function() {
    
    
    $(".btnEditar").on("click", function() {
        var id = $(this).val();
        console.log("sou o clicar do editar id: " + id);
    });

    $(".btnExcluir").on("click", function() {
        console.log("sou o clicar do excluir");
    });

});
