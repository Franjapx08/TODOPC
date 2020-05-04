var servicesConfig = "http://localhost/TODOPC/API/V1/";
var $logOn = document.getElementById("ok");
var correo = document.getElementById("correo");
var pass = document.getElementById("pass");

$logOn.addEventListener("click", function(e) {
  $logOn.disabled = true;
  var correoV = correo.value;
  var passV = pass.value;
  login(correoV, passV);
});

//services
function login(correo, pass) {
  $.ajax({
    url: servicesConfig + "login.php",
    type: "POST",
    dataType: "JSON",
    data: { correo: correo, pass: pass }
  })
    .done(function(resp) {
      if (resp.code == 1) {
        location.href = "http://localhost/TODOPC/mypc.php";
      } else {
        var x = document.getElementById("contenedor-error");
        x.style.display = "block";
      }
      $logOn.disabled = false;
    })
    .fail(function() {
      console.log("Ocurrio un error de comunicación");
    });
}
