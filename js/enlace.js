var servicesConfig = "http://localhost/TODOPC/API/V1/";

const getTemplete = function(Datos) {
  var $eve = document.getElementById("datos");
  $eve.innerHTML += `
            <div class="row">
              <ul class="list-md" style="text-align: center; width: 100%; margin-top: 20px;">
                <li>
                <a href="${Datos["link"]}">
                  <div>
                  <img style="width: 450px" src="imgEnlace/${Datos["img"]}">
                  </div>
                  </a>
              </ul>
            </div>`;
};

const getDates = function(data) {
  data.forEach(element => {
    let cont = getTemplete(element);
  });
};

$.ajax({
  url: servicesConfig + "getEnlace.php",
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
