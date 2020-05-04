var servicesConfig = "http://localhost/TODOPC/API/V1/";

const getTemplete = function(Datos, item) {
  var $eve = document.getElementById("datos");
  //console.log(Datos);
  if (item == 0) {
    $eve.innerHTML += `<div class="carousel-item active">
        <img src="imgBanner/${Datos["nombreImg"]}"  style="max-height: 400px;" class="d-block w-100" alt="images/todopc.png">
      </div>`;
  } else {
    $eve.innerHTML += `<div class="carousel-item">
        <img src="imgBanner/${Datos["nombreImg"]}"  style="max-height: 400px;" class="d-block w-100" alt="images/todopc.png">
      </div>`;
  }
};

const getDates = function(datos) {
  for (var i in datos) {
    if (i == 0) {
      getTemplete(datos[i], i);
    } else {
      getTemplete(datos[i], i);
    }
  }
};

$.ajax({
  url: servicesConfig + "getBanners.php",
  type: "POST",
  dataType: "JSON"
})
  .done(function(resp) {
    if (resp.code == 1) {
      var newArray = resp.data.map(e => {
        //console.log(e);
        return e;
      });
      getDates(newArray);
    } else {
      console.log("no resultados");
    }
  })
  .fail(function() {
    console.log("error");
  });
