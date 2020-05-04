var App = new Vue({
  el: "#apps",
  data() {
    return {
      id: 0,
      estatus: null,
      modal: false,
      data: false,
      datos: [],
      datosID: {
        id: []
      },
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
        console.log(this.datos);
      })
      .catch(function(err) {
        console.log("Error " + err);
      });
  },
  methods: {
    modificarPosicion(id, posicion) {
      this.id = id;
      console.log("posicion" + posicion);
    },
    modi(estatus, id) {
      console.log(estatus + " a " + id);
      this.id = id;
      this.estatus = estatus;
    },
    modificar() {
      console.log(this.estatus);
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
            location.reload();
          } else {
            alert("Alerta! \n" + "Error al intentar conectarse");
          }
        })
        .catch(function(err) {
          console.log("Error " + err);
        });
    },
    eliminar(item) {
      for (i in this.datos) {
        if (this.datos[i].id == item) {
          this.datosID.id.push(this.datos[i].id);
          this.datos.splice(i, 1);
          this.buttonElim = false;
        }
      }
    },
    confirmElim() {
      let dataSends = new FormData();
      let parametros = this.datosID.id.length;
      dataSends.append("parametros", parametros);
      for (var i in this.datosID) {
        dataSends.append(i, this.datosID[i].join("/"));
        //console.log(i);
      }
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
