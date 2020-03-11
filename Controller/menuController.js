$(document).ready(function(){
    var elementos = 0;
    var elementosCarrito = [];
    $(document).on('click','#btnCarrito',function(){
        var idElemento = $(this).data('idprod');
        alert("botonCarrito: " + idElemento);
        elementosCarrito.push(idElemento);

        $.ajax({
            type: "GET",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    });
});