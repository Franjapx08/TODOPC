var servicesConfig = "http://localhost/TODOPC/API/V1/";

$(document).ready(function() {
  logOut();
});

//services
function logOut() {
  $.ajax({
    url: servicesConfig + "logout.php",
    type: "POST"
  })
    .done(function(resp) {
      location.href = "http://localhost/TODOPC/";
    })
    .fail(function() {
      console.log("Ocurrio un error de comunicación");
    });
}
