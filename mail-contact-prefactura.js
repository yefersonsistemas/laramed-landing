$(document).ready(function(){

    $('#enviarContacto').click(function(event){

      var name=$('#name').val();
      var email=$('#email').val();
      var direccion=$('#direccion').val();
      var cedularif=$('#uploadrif').val();
      var producto=$('#producto').val();
      var cantidad=$('#cantidad').val();
      
      var pname=$('#p-name').val();
      var pcedula=$('#p-cedula').val();
      var pemail=$('#p-email').val();
      var pphone=$('#p-phone').val();

        // ================ Validado Nombre ==============================
            //vacio
          if( name == '' ){
            $('#name').css("border-bottom-color", "#2196f3");
            $('#msjname').css('opacity', '1');
            $('#msjname').html('Escriba su nombre y apellido.');
            return false;
            //menos de 3 caracteres
          }else if(name.length < 3){
            $('#name').css("border-bottom-color", "#2196f3");
            $('#msjname').css('opacity', '1');
            $('#msjname').html('Escriba un nombre valido');
            return false;
          }else if(!(/^[A-Za-z]/i.test(name))){
            $('#name').css("border-bottom-color", "#2196f3");
            $('#msjname').css('opacity', '1');
            $('#msjname').html('El nombre no debe tener números');
            return false;
          }else{
            $('#name').css("border-bottom-color", "#d1d1d1");
            $('#msjname').css('opacity', '0');
            $('#msjname').empty();
          }

        // ================ Validado Correo ==============================
        if( email == '' ){
          $('#email').css("border-bottom-color", "#2196f3");
          $('#msjemail').css('opacity', '1');
          $('#msjemail').html('Escriba un correo electrónico');
          event.preventDefault();
        }
        else if(!(/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/i.test(email))){
          $('#email').css("border-bottom-color", "#2196f3");
          $('#msjemail').css('opacity', '1');
          $('#msjemail').html('Escriba un correo electrónico valido');
          return false;
        } else if(email.length < 8){
          $('#email').css("border-bottom-color", "#2196f3");
          $('#msjemail').css('opacity', '1');
          $('#msjemail').html('Escriba un correo electrónico valido, mayor a 8 caracteres');
          return false;
        } else{
          $('#email').css("border-bottom-color", "#d1d1d1");
          $('#msjemail').css('opacity', '0');
          $('#msjemail').empty();
        }

        if(direccion == ""){
          $('#direccion').css("border-bottom-color", "#2196f3");
          $('#textdireccion').css('opacity', '1');
          $('#textdireccion').html('Escriba un asunto.');
          return false;
        }else if(direccion.length < 20){
          $('#direccion').css("border-bottom-color", "#2196f3");
          $('#textdireccion').css('opacity', '1');
          $('#textdireccion').html('Mínimo 20 caracteres permitidos.');
          return false;
        }else{
          $('#direccion').css("border-bottom-color", "#d1d1d1");
          $('#textdireccion').css('opacity', '0');
          $('#textdireccion').empty();
        }

        if( cedularif == ''){
          $('#uploadrif').css("border-bottom-color", "#2196f3");
          $('#textcedula-rif').css('opacity', '1');
          $('#textcedula-rif').html('No has seleccionado ningún archivo.');
          return false;
          //menos de 3 caracteres
        }else{

          extensiones_permitidas = new Array(".jpg", ".png", ".doc", ".docx", ".pdf"); 
          extension = (cedularif.substring(cedularif.lastIndexOf("."))).toLowerCase();
          
          permitida = false; 
            for (var i = 0; i < extensiones_permitidas.length; i++) { 
              if (extensiones_permitidas[i] == extension) { 
              permitida = true; 
              break; 
              } 
            }
            
            if (!permitida) { 
              $('#uploadrif').css("border-bottom-color", "#2196f3");
              $('#textcedula-rif').css('opacity', '1');
              $('#textcedula-rif').html('Comprueba la extensión de los archivos a subir.<br>Sólo se pueden subir archivos con extensiones: ' + extensiones_permitidas.join());
              return false;
             }else{ 
              $('#uploadrif').css("border-bottom-color", "#d1d1d1");
              $('#textcedula-rif').css('opacity', '0');
              $('#textcedula-rif').empty();
             } 
        }

        if( producto == "Seleccione"){
          $('#producto').css("border-bottom-color", "#2196f3");
          $('#textproducto').css('opacity', '1');
          $('#textproducto').html('No has seleccionado ningún producto.');
          return false;
          //menos de 3 caracteres
        }else{
              $('#producto').css("border-bottom-color", "#d1d1d1");
              $('#textproducto').css('opacity', '0');
              $('#textproducto').empty();
        }

        if(cantidad == ""){
          $('#cantidad').css("border-bottom-color", "#F14B4B");
          $('#textcantidad').css('opacity', '1');
          $('#textcantidad').html('Coloque una cantidad válida para el producto seleccionado.');
          event.preventDefault();
        }else{
          $('#cantidad').css("border-bottom-color", "#d1d1d1");
          $('#textcantidad').css('opacity', '0');
          $('#textcantidad').empty();
        }
        
        if( pname == '' ){
          $('#p-name').css("border-bottom-color", "#2196f3");
          $('#textp-name').css('opacity', '1');
          $('#textp-name').html('Escriba su nombre y apellido.');
          return false;
          //menos de 3 caracteres
        }else if(pname.length < 3){
          $('#p-name').css("border-bottom-color", "#2196f3");
          $('#textp-name').css('opacity', '1');
          $('#textp-name').html('Escriba un nombre valido');
          return false;
        }else if(!(/^[A-Za-z]/i.test(pname))){
          $('#p-name').css("border-bottom-color", "#2196f3");
          $('#textp-name').css('opacity', '1');
          $('#textp-name').html('El nombre no debe tener números');
          return false;
        }else{
          $('#p-name').css("border-bottom-color", "#d1d1d1");
          $('#textp-name').css('opacity', '0');
          $('#textp-name').empty();
        }

        if(pcedula == ""){
          $('#p-cedula').css("border-bottom-color", "#F14B4B");
          $('#textp-cedula').css('opacity', '1');
          $('#textp-cedula').html('Ingrese un número de cédula válido..');
          event.preventDefault();
        }else if(pcedula.length < 7){
          $('#p-name').css("border-bottom-color", "#2196f3");
          $('#textp-cedula').css('opacity', '1');
          $('#textp-cedula').html('Para la cédula los caracteres minimos son 7.');
          return false;
        }else if(pcedula.length > 20){
          $('#p-cedula').css("border-bottom-color", "#2196f3");
          $('#textp-cedula').css('opacity', '1');
          $('#textp-cedula').html('Para la cédula los caracteres máximos son 20.');
          return false;
        }else{
          $('#p-cedula').css("border-bottom-color", "#d1d1d1");
          $('#textp-cedula').css('opacity', '0');
          $('#textp-cedula').empty();
        }

        if(pphone == ""){
          $('#p-phone').css("border-bottom-color", "#F14B4B");
          $('#textp-phone').css('opacity', '1');
          $('#textp-phone').html('Escriba un número telefónico');
          event.preventDefault();
        }else if(!(/^([0-9- +]{10,20})$/i.test(pphone))){
          $('#p-phone').css("border-bottom-color", "#F14B4B");
          $('#textp-phone').css('opacity', '1');
          $('#textp-phone').html('Introduzca un número telefónico válido (ej. +1 407 603 7506).');
          event.preventDefault();
        }else{
          $('#p-phone').css("border-bottom-color", "#d1d1d1");
          $('#textp-phone').css('opacity', '0');
          $('#textp-phone').empty();
        }

        if( pemail == '' ){
          $('#p-email').css("border-bottom-color", "#2196f3");
          $('#textp-email').css('opacity', '1');
          $('#textp-email').html('Escriba un correo electrónico');
          event.preventDefault();
        }
        else if(!(/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/i.test(pemail))){
          $('#p-email').css("border-bottom-color", "#2196f3");
          $('#textp-email').css('opacity', '1');
          $('#textp-email').html('Escriba un correo electrónico valido');
          return false;
        } else if(pemail.length < 8){
          $('#p-email').css("border-bottom-color", "#2196f3");
          $('#textp-email').css('opacity', '1');
          $('#textp-email').html('Escriba un correo electrónico valido, mayor a 8 caracteres');
          return false;
        } else{
          $('#p-email').css("border-bottom-color", "#d1d1d1");
          $('#textp-email').css('opacity', '0');
          $('#textp-email').empty();
        }
      });

       $('#formularioContacto').ajaxForm(function() { 
          
          var formData = new FormData(document.getElementById("formularioContacto"));

          // console.log(formData);
          $("#enviarContacto").attr("disabled", true);

            $.ajax({
                url: "enviarCorreoPrefactura.php",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success: function (data) {
                  $('#success').html("<div class='alert alert-success'>");
                  $('#success > .alert-success')
                    .append("<strong>Su mensaje fue enviado. </strong>");
                  $('#success > .alert-success')
                    .append('</div>');
                  //clear all fields
                  $('#formularioContacto').trigger("reset");
                  $('#enviarContacto').attr("disabled", false);
                  return false;
                },
                error: function () {
                   // Fail message
                  $('#success').html("<div class='alert alert-danger'>");
                  $('#success > .alert-danger').append($("<strong>").text("Lo sentimos, Parece que el servidor de correo no está respondiendo. ¡Por favor, inténtelo de nuevo más tarde!"));
                  $('#success > .alert-danger').append('</div>');
                  //clear all fields
                  $('#formularioContacto').trigger("reset");
                  $('#enviarContacto').attr("disabled", false);
                  return false;
                }
            });
        }); 
});