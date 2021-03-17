const { get } = require("jquery");

$(document).ready(function(){
    let id = $('#identificador').val();
    let paginaNumero = $('#paginaNumero').val();
    $.ajax({
        url: 'listarExistencias',
        type: 'GET',
        data: {
            id: id,
            paginaNumero : paginaNumero
        },
        success: function(response){
            console.log(resoponse);
        },
        error: function(){
            alert("Ha sucedido un error intentelo de nuevo");
        }
    })
})
