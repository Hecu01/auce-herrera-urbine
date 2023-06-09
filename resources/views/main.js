// Formulario 1 avanzar

$("#btn-sig-form1").click(function(){
    let nombres, apellidos;
    nombres = $("#nombres").val();
    apellidos = $("#apellidos").val();
    if(nombres.length < 2 || apellidos.length < 2){
        alert('Faltan campos por llenar');
    }else{
        $(".form1-datos-personales").hide();$(".form2-datos-personales").show(); 
    }
})
// Formulario 2 retroceder
$("#btn-atras-form2").click(function(){
    $(".form1-datos-personales").show();$(".form2-datos-personales").hide(); 
})
// Formulario 2 avanzar
$("#btn-sig-form2").click(function(){
    $(".form2-datos-personales").hide();$(".form3-datos-personales").show(); 
})
    
// Formulario 3 retroceder
$("#btn-atras-form3").click(function(){
    $(".form2-datos-personales").show();$(".form3-datos-personales").hide(); 
})
    






// mostrar imagen en el form

function previewImage(event, querySelector){

    //Recuperamos el input que desencadeno la acción
    const input = event.target;

    //Recuperamos la etiqueta img donde cargaremos la imagen
    $imgPreview = document.querySelector(querySelector);

    // Verificamos si existe una imagen seleccionada
    if(!input.files.length) return

    //Recuperamos el archivo subido
    file = input.files[0];

    //Creamos la url
    objectURL = URL.createObjectURL(file);

    //Modificamos el atributo src de la etiqueta img
    $imgPreview.src = objectURL;
            
}