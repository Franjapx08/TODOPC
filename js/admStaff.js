var App = new Vue({
  el: "#apps",
  data() {
    return {
      estatus: null,
      data: false,
      datos: [],
      form: {
        tel: null,
        cel: null,
        email: null
      },
      idSelect: null,
      file: [],
      buttonElim: true,
      buttonConfirm: true,
      servicesConfig: "http://localhost/TODOPC/API/V1/",
      encontrado: false
    };
  },
  created() {
    axios
      .post(this.servicesConfig + "getStaffControl.php", {
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
    modificarProcess(email, cel, tel, id) {
      this.idSelect = id;
      this.form.cel = cel;
      this.form.tel = tel;
      this.form.email = email;
    },
    modificarProceso() {
      let dataSends = new FormData();
      dataSends.append("id", this.idSelect);
      dataSends.append("telefono", this.form.tel);
      dataSends.append("celular", this.form.cel);
      dataSends.append("email", this.form.email);
      axios
        .post(this.servicesConfig + "updateStaff.php", dataSends)
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
        .post(this.servicesConfig + "updateStaffEstatus.php", dataSends)
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
        .post(this.servicesConfig + "deleteStaff.php", dataSends)
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
    nuevoAnuncio() {
      let dataSends = new FormData();
      if (this.form.email != null) {
        dataSends.append("img", this.file);
        dataSends.append("telefono", this.form.tel);
        dataSends.append("celular", this.form.cel);
        dataSends.append("email", this.form.email);
        axios
          .post(this.servicesConfig + "insertStaff.php", dataSends)
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
