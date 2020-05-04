var servicesConfig = "http://localhost/TODOPC/API/V1/";

const getTemplete = function(Datos) {
  var $eve = document.getElementById("datos");
  $eve.innerHTML += `
             <div class="row row-30">
            <div class="col-lg-6">
              <img src="imgUbicacion/${Datos["imgTienda"]}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".05s">
              <h3>Datos generales</h3>
              <div class="row row-30">
                <div class="col-sm-6">
                  <ul class="list">
                    <li>
                      <h4>Dirección</h4>
                      <p>${Datos["direccion"]}</p>
                    </li>
                    <li>
                      <h4>Contacto</h4>
                      <p>${Datos["contacto"]}</p>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <h4>Ubicación</h4>
                  <img src="imgUbicacion/${Datos["imgMapa"]}" class="img-fluid" alt="Responsive image">
                </div>
              </div>
            </div>
          </div>`;
};

const getDates = function(data) {
  data.forEach(element => {
    let cont = getTemplete(element);
  });
};

$.ajax({
  url: servicesConfig + "getUbicacion.php",
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
