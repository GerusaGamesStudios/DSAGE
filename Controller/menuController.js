$(document).ready(function(){
    var elementos = 0;
    var elementosCarrito = [];
    $(document).on('click','#btnCarrito',function(){
        var idElemento = $(this).data('idprod');
        alert("botonCarrito: " + idElemento);
        elementosCarrito.push(idElemento);
    });
});