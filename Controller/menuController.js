$(document).ready(function(){
    var elementos = 0;
    var elementosCarrito = [];
    var costoTotal = 0;
    $(document).on('click','#btnCarrito',function(){
        var idElemento = $(this).data('idprod');
        elementosCarrito.push(idElemento);
        console.log(idElemento);
        $.ajax({
            type: "GET",
            url: "../../Model/Producto.php",
            data: {"idprod":idElemento},
            success: function (response) {
                console.log(response);
                var elemento = JSON.parse(response);
                elemento = elemento[0];
                costoTotal += parseFloat( elemento.PRECIO);
                $('#carritoCompras').append(
                    '<div class="elementoCarrito"> <h2>' + elemento.NOMBRE + '</h2> <h3>' + elemento.DESCRIPCION+ '</h3> <H4>$ ' + elemento.PRECIO+ '.00 MXN</H4>  </div>'
                );
                console.log("puesto");
                console.log(costoTotal);
                $('#crearOrden').html('CREAR ORDEN $' + costoTotal + '.00 MXN');
            }
        });
    });

    $(document).on('click','#crearOrden',function(){
        $.ajax({
            type: "POST",
            url: "../../Model/Orden.php",
            data: {"productos":elementosCarrito,"numesa":3},
            success: function (response) {
                alert(response);
            }
        });
    });
});