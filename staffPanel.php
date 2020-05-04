<?php
  include 'config.php';
  if($sesion){
 ?>
<html class="wide wow-animation" lang="en">

<head>
  <title>TODO PC | ADMIN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/centro.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--   <script src="js/jquery.min.js"></script>    -->
  <script src="js/vue.js"></script>
</head>
<style>
  #navs a{
    color: white;
  }
  #navs span{
    color: white;
  }

</style>
<body>
  <div id="apps">  <!--vue-->
    <?php 
      include('./includes/adm/header.php');
    ?>
    <div class="page">
      <div id="container-center">
            <div class="contenido">
            <!-- boot -->
              <div class="container">
                <div class="row" id="datos" v-if="data">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Activar/Desactivar</th>
                        <th scope="col">Modificar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="index in datos">
                        <th>
                          <img
                            v-if="index.img != 0"
                            id="index.id"
                            :src="`imgStaff/${index.img}`"
                            style="width:200px;"
                          />
                          <span v-if="index.img == 0">No imagen disponible</span>
                        </th>
                        <th>
                            <button v-if="index.estatus == 0"  type="button" class="btn btn-warning" 
                            data-toggle="modal" data-target="#exampleModalLong" @click="estatusSelect(index.estatus, index.id)">Desactivar</button>
                            <button v-if="index.estatus == 1"  type="button" class="btn btn-success" 
                            data-toggle="modal" data-target="#exampleModalLong" @click="estatusSelect(index.estatus, index.id)">Activar</button>
                        </th>
                        <th>
                        <button type="button" class="btn btn-success" 
                        data-toggle="modal" data-target="#exampleModalLong2" @click="modificarProcess(index.email, index.celular, index.telefono, index.id)">Modifiar</button>
                        </th>
            
                      </tr>
                    </tbody>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Activar/Desactivar</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ¿Realmente desea hacer esta acción?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="button" @click="updateEstatus()" class="btn btn-success">Aceptar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </table>
                   <!-- Modal modificar-->
                  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle2">Modificar</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefono</label>
                                <input type="text" v-model="form.tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Celular</label>
                                <input type="text" v-model="form.cel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input type="text" v-model="form.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>                      
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" @click="eliminar" data-dismiss="modal">Eliminar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="button" @click="modificarProceso()" class="btn btn-success">Aceptar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Modal nuevo-->
                  <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle2">Nuevo staff</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefono</label>
                                <input type="text" v-model="form.tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Celular</label>
                                <input type="text" v-model="form.cel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input type="text" v-model="form.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Imagen representativa</label>
                                <input type="file"  @change="onFileChanged" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="button" @click="nuevoAnuncio()" class="btn btn-success">Aceptar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form>
                </div> <!-- vfor end-->
                <div>
                 <button type="button" class="btn btn-success" 
                data-toggle="modal" data-target="#exampleModalLong3" >Nuevo anuncio</button>
                </div>
            </div>
          </div>
      </div>
      </div>
  </div>
      <!--finish vue -->
</body>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
  <script src="js/admStaff.js"></script>
<?php
  }else{
     header("Location: http://localhost/TODOPC/");
  }
    ?>

</html>