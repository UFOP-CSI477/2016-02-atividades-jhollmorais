$(document).ready(function(){
  console.log("Documento pronto para uso!");

  $("form").submit(function(){

    if($("#nome").val() == ""){
      $("#nome").focus();
      return false;
    }

    if($("#cpf").val() == ""){
      $("#cpf").focus();
      return false;
    }

    if($("#rua").val() == ""){
      $("#rua").focus();
      return false;
    }

    if($("#numero").val() == ""){
      $("#numero").focus();
      return false;
    }

    if($("#cidade").val() == 0){
      $("#cidade").focus();
      return false;
    }

    if($("#estado").val() == 0){
      $("#estado").focus();
      return false;
    }

    if($("#cep").val() == ""){
      $("#cep").focus();
      return false;
    }

    if($("#telefone").val() == ""){
      $("#telefone").focus();
      return false;
    }

    if($("#celular").val() == ""){
      $("#celular").focus();
      return false;
    }
    if($("#email").val() == ""){
      $("#email").focus();
      return false;
    }

    if($("#usuario").val()==""){
      $("#usuario").focus();
      return false;
    }

    if($("#senha").val() == ""){
      $("#senha").focus();
      return false;
    }

    if ($("#senha").val() != ($("#confirmar").val())) {
      alert("Reconfirmar senha.");
      $("#confirmar").focus();
      return false;
    }
  });
});
