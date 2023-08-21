var numericInputs = document.querySelectorAll('.numeric-input');

numericInputs.forEach(function(input) {
  input.addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
  });
});

$(document).ready(function() {




  // botones de siguiente en la inscripcion
  // botones desactivados
  $("#myButton").prop("disabled", true);
  $("#myButton2").prop("disabled", true);
  $("#myButton3").prop("disabled", true);
  $("#myButton4").prop("disabled", true);
  $("#myButton5").prop("disabled", true);
  $("#myButton6").prop("disabled", true);
  $('input[name="aspirante_trabaja"]').on('change', function() {
    var valor = $(this).val();
    if (valor === "Si") {
       $('#div_aspirante_si_trabaja').show();
    } else if (valor === "No") {
       $('#div_aspirante_si_trabaja').hide();
    }
 });



  // No copiar y pegar
  $('#confirm_email').on('paste', function(event) {
    event.preventDefault();
    alert('No se permite pegar en este campo.');
  });
  // Agrega un evento 'input' a cada campo de entrada
  // Datos a validar
  $("#foto-aspirante, #nombres, #apellidos, #estado-civil, #sexo, #dni, #cuil").on("input", validar_form1);
  $("#ciudad_nac, #provincia_nac, #pais_nac, #fecha_nac").on("input", validar_form2);

  $("#domicilio, #ciudad, #provincia, #codigo_postal").on("input", validar_form3);
  $("#correo, #confirm_email, #celular").on("input", validar_form4);
  $("#carrera_a_estudiar").on("input", validar_form5);
  $("#titulo_secundario, #escuela_egreso, #año_egreso, #ciudad_egreso").on("input", validar_form6);
});

// Función para verificar si todos los campos están llenos
function validar_form1() {
  var foto_aspirante = $("#foto-aspirante").val();
  var nombres = $("#nombres").val();
  var apellidos = $("#apellidos").val();
  var estado_civil = $("#estado-civil").val();
  var sexo = $("#sexo").val();
  var dni = $("#dni").val();
  var cuil = $("#cuil").val();        

  if (foto_aspirante !== "" && nombres.length >= 3 && apellidos.length >= 3 && estado_civil !== "" && sexo !== "" && dni.length >= 7 && cuil.length >= 10) {
    $("#myButton").prop("disabled", false); // Habilita el botón
  } else {
    $("#myButton").prop("disabled", true); // Deshabilita el botón
  }
  
}
function validar_form2() {
  var ciudad_nac = $("#ciudad_nac").val();
  var provincia_nac = $("#provincia_nac").val();
  var pais_nac = $("#pais_nac").val();
  var fecha_nac = $("#fecha_nac").val();
  
  if (ciudad_nac !== "" && provincia_nac.length >= 3 && pais_nac.length >= 3 && fecha_nac.length >= 3) {
    $("#myButton2").prop("disabled", false); // Habilita el botón
  } else {
    $("#myButton2").prop("disabled", true); // Deshabilita el botón
  }
  
}
function validar_form3() {
  var domicilio = $("#domicilio").val();
  var barrio = $("#barrio").val();
  var ciudad = $("#ciudad").val();
  var provincia = $("#provincia").val();
  var codigo_postal = $("#codigo_postal").val();
  
  if (domicilio.length >= 3  &&  ciudad.length >= 3 &&  provincia.length >= 3 &&  codigo_postal.length >= 1) {
    $("#myButton3").prop("disabled", false); // Habilita el botón
  } else {
    $("#myButton3").prop("disabled", true); // Deshabilita el botón
  }
  
}
function validar_form4() {
  var correo = $("#correo").val();
  var correo_de_nuevo = $("#confirm_email").val();
  var celular = $("#celular").val();
  
  if (celular.length >= 9 && correo_de_nuevo === correo) {
    $("#myButton4").prop("disabled", false); // Habilita el botón
  } else {
    $("#myButton4").prop("disabled", true); // Deshabilita el botón
  }
  
}
function validar_form5() {
  var carrera_a_estudiar = $("#carrera_a_estudiar").val();
  
  if (carrera_a_estudiar !== "Default") {
    $("#myButton5").prop("disabled", false); // Habilita el botón
  } else {
    $("#myButton5").prop("disabled", true); // Deshabilita el botón
  }
  
}
function validar_form6() {
  var titulo_secundario = $("#titulo_secundario").val();
  var escuela_egreso = $("#escuela_egreso").val();
  var año_egreso = $("#año_egreso").val();
  var ciudad_egreso = $("#ciudad_egreso").val();
  
  if (titulo_secundario.length >= 4 && escuela_egreso.length >= 4 &&  año_egreso.length >= 4 &&  ciudad_egreso.length >= 4) {
    $("#myButton6").prop("disabled", false); // Habilita el botón
  } else {
    $("#myButton6").prop("disabled", true); // Deshabilita el botón
  }
  
}

//the form wrapper (includes all forms)
var $form_wrapper = $('#form_wrapper'),
//the current form is the one with class "active"
$currentForm = $form_wrapper.children('div.active'),
//the switch form links
$linkform = $form_wrapper.find('.linkform');


							
$form_wrapper.children('div').each(function(i){
	var $theForm	= $(this);
	//solve the inline display none problem when using fadeIn/fadeOut
	if(!$theForm.hasClass('active'))
		$theForm.hide();
	$theForm.data({
		width	: $theForm.width(),
		height	: $theForm.height()
	});
});


setWrapperWidth();


$linkform.bind('click',function(e){
    // let nombres, apellidos;
    // nombres = $("#nombres").val();
    // apellidos = $("#apellidos").val();

	var $link	= $(this);
	var target	= $link.attr('rel');
	$currentForm.fadeOut(400,function(){
		//remove class "active" from current form
		$currentForm.removeClass('active');
		//new current form
		$currentForm= $form_wrapper.children('div.'+target);
		//animate the wrapper
		$form_wrapper.stop().animate({
            width	: $currentForm.data('width') + 'px',
            height	: $currentForm.data('height') + 'px'
            },500,function(){
            //new form gets class "active"
            $currentForm.addClass('active');
            //show the new form
            $currentForm.fadeIn(400);
        });
	});
	e.preventDefault();
});

function setWrapperWidth(){
	$form_wrapper.css({
		width	: $currentForm.data('width') + 'px',
		height	: $currentForm.data('height') + 'px'
	});
}


$form_wrapper.find('input[type="submit"]')
    .click(function(e){
    e.preventDefault();
});	






$linkform.bind('click',function(e){
	
});
// Formulario 1 avanzar
$("#btn-sig-form1").click(function(){
    let nombres, apellidos;
    nombres = $("#nombres").val();
    apellidos = $("#apellidos").val();
    apellidos = $("#apellidos").val();
    //if(nombres.length > 2 || apellidos.length > 2){}

    $(".form1-datos-personales").hide();
        
    $(".form2-datos-personales").show(); 
    ScrollReveal().reveal('.form2-datos-personales', {
        delay: 500,
        distance: '150px',
        origin: 'right',
        duration: 500,
        reset: true
    });
    
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