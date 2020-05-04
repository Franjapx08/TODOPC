var servicesConfig = "http://localhost/TODOPC/API/V1/";

const getTemplete = function(Datos) {
  var $eve = document.getElementById("datos");
  $eve.innerHTML += `
        <div class="row">
            <ul class="list-md" style="text-align: center; width: 100%; margin-top: 10px;">
            <li>
                <img src="imgStaff/${Datos["img"]}">
                <p>
                <a href="tel:${Datos["celular"]}"> <img class="callus" src="images/tel.png" alt="" width="80" height="50"></a>
                <a href="tel:${Datos["celular"]}"> <img class="callus" src="images/cel.png" alt="" width="80" height="50"></a>
                <a href="mailto:${Datos["email"]}"> <img class="callus" src="images/mail.png" alt="" width="80" height="50"></a>
                </p>
            </li>
            </ul>
        </div>`;
};

const getDates = function(data) {
  data.forEach(element => {
    let cont = getTemplete(element);
  });
};

$.ajax({
  url: servicesConfig + "getStaff.php",
  type: "POST",
  dataType: "JSON"
})
  .done(function(resp) {
    if (resp.code == 1) {
      var newArray = resp.data.map(e => {
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
