const menuIzquierdo = document.querySelector('.menu-izquierdo');

menuIzquierdo.addEventListener('click', (e) => {
    const claseMenu = e.target.classList;

    // Selecciona el contenedor
    const contenedor = document.querySelector('.pagina'),
        flechaIzq = document.querySelector('.fa-arrow-left'),
        flechaDer = document.querySelector('.fa-arrow-right');

    if (claseMenu.contains('fa-arrow-left')) {
        // cerrar el menú lateral
        contenedor.classList.add('no-menu');
        e.target.style.display = 'none';
        flechaDer.style.display = 'block';
    } else if (claseMenu.contains('fa-arrow-right')) {
        contenedor.classList.remove('no-menu');
        e.target.style.display = 'none';
        flechaIzq.style.display = 'block';
    }
});


$(document).ready(function(){

    $("#pais").change(function(){
    
        var id=$(this).val();
        var dataString = 'idPais='+ id;
        var direccion = 'http://localhost/Actividades/Paqueteria/Ubicacion/getEstados&' + dataString;
        console.log(direccion);

        $("#estado").find('option').remove();
        $("#ciudad").find('option').remove();
        $("#colonia").find('option').remove();
        
        $.ajax({
        
            type: "GET",
            url: direccion,
            /* data: dataString, */
            cache: false,
            success: function(html){
                
                $("#estado").html(html);
            }
        });
    });

    $("#estado").change(function(){
    
        var id=$(this).val();
        var dataString = 'idEstado='+ id;
        var direccion = 'http://localhost/Actividades/Paqueteria/Ubicacion/getCiudades&' + dataString;

        $.ajax({

            type: "GET",
            url: direccion,
            /* data: dataString */
            cache: false,
            success: function(html){
            
                $("#ciudad").html(html);
            } 
        });
    });

    $("#ciudad").change(function(){
    
        var id=$(this).val();
        var dataString = 'idCiudad='+ id;
        var direccion = 'http://localhost/Actividades/Paqueteria/Ubicacion/getColonias&' + dataString;
        console.log(direccion);

        $.ajax({

            type: "GET",
            url: direccion,
            /* data: dataString */
            cache: false,
            success: function(html){
            
                $("#colonia").html(html);
            } 
        });
    });

});

$(document).ready(function(){
    
    $("#peso").change(function(){
        
        var valor = $(this).val();
        var precio;
        
        if(valor == 1){
            
            $("#precio").html("100");
            precio = $("#precio").html();
            $("#precioEnvio").val(precio);
            
        }else if(valor == 2){

            $("#precio").html("300");
            precio = $("#precio").html();
            $("#precioEnvio").val(precio);

        }else if(valor == 3){

            $("#precio").html("500");
            precio = $("#precio").html();
            $("#precioEnvio").val(precio);

        }else{
            $("#precio").html("800");
            precio = $("#precio").html();
            $("#precioEnvio").val(precio);
        }
    });
});