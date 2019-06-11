$(document).ready(function(){

    $('#enviarContacto').click(function(event){

      var name=$('#name').val();
      var email=$('#email').val();
      var asunto=$('#asunto').val();
      var msj=$('#mensaje').val();
      var form_data = $("#formularioContacto").serialize();


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
        
        if(asunto == ""){
          $('#asunto').css("border-bottom-color", "#2196f3");
          $('#textasunto').css('opacity', '1');
          $('#textasunto').html('Escriba un asunto.');
          return false;
        }else if(asunto.length < 20){
          $('#asunto').css("border-bottom-color", "#2196f3");
          $('#textasunto').css('opacity', '1');
          $('#textasunto').html('Mínimo 20 caracteres permitidos.');
          return false;
        }else{
          $('#asunto').css("border-bottom-color", "#d1d1d1");
          $('#textasunto').css('opacity', '0');
          $('#textasunto').empty();
        }

        // ================ Validado mensaje ==============================
        if(msj == ""){
          $('#mensaje').css("border-bottom-color", "#2196f3");
          $('#textmsj').css('opacity', '1');
          $('#textmsj').html('Escriba un mensaje.');
          return false;
        }else if(msj.length < 20){
          $('#mensaje').css("border-bottom-color", "#2196f3");
          $('#textmsj').css('opacity', '1');
          $('#textmsj').html('Mínimo 20 caracteres permitidos.');
          return false;
        }else{
          $('#mensaje').css("border-bottom-color", "#d1d1d1");
          $('#textmsj').css('opacity', '0');
          $('#textmsj').empty();
        }
        
        $("#enviarContacto").attr("disabled", true);
         $.ajax({
              url: "enviarCorreoContacto.php",
              type: "POST",
              Datatype: 'JSON',
              data:form_data,
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