$("#sendmail").on("click", function() {
  var email=$("#email").val().trim();
  var message=$("#message").val().trim();

if(email == ""){
 $("#errormess").text("Введите ваш email");
return false;
}
else if(message.length < 5){
 $("#errormess").text("Сообщение должно быть более чем 5 символов");
return false;
}
$("#errormess").text("");

$.ajax({
  url:'ajax/mail.php',
  type:'POST',
  cache: false,
  data: {'email':email,'message':message},
  dataType:'html',
  beforeSend: function() {
    $("#sendmail").prop("disabled",true);
  },
  success: function(data) {
    if(!data)
    alert("Были ошибки, сообщение не отправлено!");
    else
    $("#mailform").trigger("reset");

    $("#sendmail").prop("disabled",false);
  }

});
});
