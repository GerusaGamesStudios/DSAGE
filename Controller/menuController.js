$(document).ready(function(){
    var elementos = 0;
    var elementosCarrito = [];
    $(document).on('click','#btnCarrito',function(){
        var idElemento = $(this).data('idprod');
        elementosCarrito.push(idElemento);
        console.log(idElemento);
        $.ajax({
            type: "GET",
            url: "../../Model/Producto.php",
            data: {"idprod":idElemento},
            success: function (response) {
                alert(response);
            }
        });
    });
});