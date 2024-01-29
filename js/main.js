jQuery(document).on('submit','#iniciar',function(event){

event.preventDefault();

$.ajax({
    type: "POST",
    url: "../php/funciones.php",
    data:$(this).serialize(),
    dataType: "json",
beforeSend:function(){
        $('.Registrar').val('validando....');
    }
})

.done(function(respuesta){
    console.log(respuesta)
if(!respuesta.error){
        if(respuesta.tipo=='Admin'){
            location.href='http://localhost/concesionario_de_carros/php/dashboard/dashboard.php'
    } else if(respuesta.tipo=='Usuario'){
            location.href='http://localhost/concesionario_de_carros/'
    }

}else{
    $('.error').slideDown('slow');
    setTimeout(function(){

        $('.error').slideUP('slow');

    },3000);
    $('.Registrar').val('Iniciar Sesion');
}


    
})
.fail(function(resp){
console.log(resp.responseText)
})
.always(function(){
console.log("complete")

})
});
