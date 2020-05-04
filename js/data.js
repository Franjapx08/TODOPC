var App = new Vue({
  el: "#apps",
  data() {
    return {
      posiciones: [],
      editButton: true,
      id: 0,
      estatus: null,
      modal: false,
      data: false,
      datos: [],
      datosID: {
        id: []
      },
      form: {
        inputNumber: 69
      },
      posicionMax: null,
      posicionMin: null,
      posicion: null,
      file: [],
      buttonElim: true,
      buttonConfirm: true,
      servicesConfig: "http://localhost/TODOPC/API/V1/",
      encontrado: false
    };
  },
  created() {
    axios
      .post(this.servicesConfig + "getBannerControl.php", {
        responseType: "json"
      })
      .then(r => {
        this.datos = r.data.data;
        this.data = true;
        this.posiciones = [];
        for (var i in r.data.data) {
          console.log(r.data.data[i].posicion);
          var max = r.data.data[i].posicion;
          this.posiciones.push(max);
        }
        console.log(this.posiciones);
        this.posicionMax = Math.max.apply(null, this.posiciones);
        this.posicionMin = Math.min.apply(null, this.posiciones);
      })
      .catch(function(err) {
        console.log("Error " + err);
      });
  },
  methods: {
    modificarPosicion(id, posicion) {
      this.id = id;
      this.posicion = posicion;
      this.form.inputNumber = posicion;
      console.log("posicion" + posicion);
    },
    modi(estatus, id) {
      console.log(estatus + " a " + id);
      this.id = id;
      this.estatus = estatus;
    },
    modificar() {
      console.log(this.form.inputNumber);
      var encontrado;
      if (this.posiciones.indexOf(this.form.inputNumber)) {
        console.log("dale");
        encontrado = true;
      } else {
        console.log("esta");
      }
      if (encontrado) {
        if (this.form.inputNumber > this.posicionMax) {
          console.log("Es mayor");
          console.log("El mayor es:" + this.posicionMax);
          var newValue = this.posicionMax + 1;
          let dataSends = new FormData();
          dataSends.append("id", this.id);
          dataSends.append("posicion", newValue);
          axios
            .post(this.servicesConfig + "updatePosicion.php", dataSends)
            .then(r => {
              if (r.data.code == 1) {
                location.reload();
              } else {
                alert("Alerta! \n" + "Error al intentar conectarse");
              }
            })
            .catch(function(err) {
              console.log("Error " + err);
            });
        }
      }
      /* console.log(this.estatus);
      let estatusSend;
      if (this.estatus == 1) {
        estatusSend = 0;
      } else if (this.estatus == 0) {
        estatusSend = 1;
      }
      let dataSends = new FormData();
      dataSends.append("id", this.id);
      dataSends.append("estatus", estatusSend);
      axios
        .post(this.servicesConfig + "updateEstatus.php", dataSends)
        .then(r => {
          if (r.data.code == 1) {
            //location.reload();
          } else {
            alert("Alerta! \n" + "Error al intentar conectarse");
          }
        })
        .catch(function(err) {
          console.log("Error " + err);
        }); */
    },
    eliminar() {
      if (this.id != 0) {
        let dataSends = new FormData();
        dataSends.append("id", this.id);
        axios
          .post(this.servicesConfig + "deleteBanner.php", dataSends)
          .then(r => {
            if (r.data.code == 1) {
              location.reload();
            } else {
              alert("Alerta! \n" + "Error al intentar conectarse");
            }
          })
          .catch(function(err) {
            console.log("Error " + err);
          });
      }
    },
    onFileChanged(event) {
      if (event.target.files[0] != undefined) {
        this.file = event.target.files[0];
        this.buttonConfirm = false;
      } else {
        this.file = 0;
        this.buttonConfirm = true;
      }
    },
    insertAnuncio() {
      let dataSends = new FormData();
      dataSends.append("img", this.file);
      axios
        .post(this.servicesConfig + "insertBanner.php", dataSends)
        .then(r => {
          if (r.data.code == 1) {
            location.reload();
          } else {
            alert("Alerta! \n" + "Error al intentar agregar un anuncio");
          }
        })
        .catch(function(err) {
          console.log("Error " + err);
        });
    }
  }
});
