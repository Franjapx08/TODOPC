var App = new Vue({
  el: "#apps",
  data() {
    return {
      estatus: null,
      data: false,
      datos: [],
      form: {
        cel: null,
        direc: null
      },
      idSelect: null,
      file: [],
      file2: [],
      buttonElim: true,
      buttonConfirm: true,
      servicesConfig: "http://localhost/TODOPC/API/V1/",
      encontrado: false
    };
  },
  created() {
    axios
      .post(this.servicesConfig + "getUbicacionControl.php", {
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
    modificarProcess(direc, cel, id) {
      this.idSelect = id;
      this.form.cel = cel;
      this.form.direc = direc;
    },
    modificarProceso() {
      let dataSends = new FormData();
      dataSends.append("id", this.idSelect);
      dataSends.append("contacto", this.form.cel);
      dataSends.append("direccion", this.form.direc);
      axios
        .post(this.servicesConfig + "updateUbicacion.php", dataSends)
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
    estatusSelect(estatus, id) {
      this.idSelect = id;
      this.estatus = estatus;
    },
    updateEstatus() {
      let estatusSend;
      if (this.estatus == 1) {
        estatusSend = 0;
      } else if (this.estatus == 0) {
        estatusSend = 1;
      }
      let dataSends = new FormData();
      dataSends.append("id", this.idSelect);
      dataSends.append("estatus", estatusSend);
      axios
        .post(this.servicesConfig + "updateUbicacionEstatus.php", dataSends)
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
    eliminar() {
      let dataSends = new FormData();
      dataSends.append("id", this.idSelect);
      axios
        .post(this.servicesConfig + "deleteUbicacion.php", dataSends)
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
    onFileChanged2(event) {
      if (event.target.files[0] != undefined) {
        this.file2 = event.target.files[0];
        this.buttonConfirm = false;
      } else {
        this.file2 = 0;
        this.buttonConfirm = true;
      }
    },
    nuevoAnuncio() {
      let dataSends = new FormData();
      if (this.form.direc != null) {
        dataSends.append("imgTienda", this.file);
        dataSends.append("imgMapa", this.file2);
        dataSends.append("direccion", this.form.direc);
        dataSends.append("celular", this.form.cel);
        axios
          .post(this.servicesConfig + "insertUbicacion.php", dataSends)
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
      } else {
        alert("Error! \n" + "Campos de entrada vacios");
      }
    }
  }
});
