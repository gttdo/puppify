$(document).ready(function(){
  console.log("js connected!");
  $("#hideLogin").click(function(){
    $("#loginForm").hide();
    $("#registerForm").show();
  });

  $("#hideRegister").click(function(){
    $("#loginForm").show();
    $("#registerForm").hide();
  });
});
