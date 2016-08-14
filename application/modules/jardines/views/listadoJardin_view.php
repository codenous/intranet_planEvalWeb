  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $tituloMantenedor; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> PlanEvalWeb</a></li>
        <li><a href="#">Funcionarios</a></li>
        <li class="active">Lista de Funcionarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title"><?php echo $tituloFormulario; ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-instagram btn-sm" data-widget="collapse" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body no-padding">
            <table class="table">
                <tr>
                  <th style="width: 10%">Cód.</th>
                  <th style="width: 25%">Nombre Jardín</th>
                  <th style="width: 10%">Directoras</th>
                  <th style="width: 15%">Estado</th>
                  <th style="width: 25%">F. Creación</th>
                  <th style="width: 15%;text-align: center;" colspan="3">Acciones</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jardín Infantil Las Mariposas</td>
                    <td>3</td>
                    <td>
                        <a href="#ventana" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                            <span class="label label-danger" data-toggle="tooltip" title="Habilitar Jardín">No Habilitado</span>
                        </a>
                    </td>
                    <td>10 de Noviembre de 2010</td>
                    <td>
                        <a href="<?php echo base_url() ?>jardines/Index/verJardin" data-toggle="tooltip" title="Abrir Perfil">
                            <i class="fa fa-folder-open fa-1x" aria-hidden="true" style="color:#00a0f0;font-size:13pt"></i>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo base_url() ?>jardines/Index/modificarJardin" data-toggle="tooltip" title="Editar">
                            <i class="fa fa-pencil-square-o fa-1x" aria-hidden="true" style="color:#7fbb00;font-size:13pt"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Eliminar">
                            <i class="fa fa-times" aria-hidden="true" style="color:#ff3322;font-size:14pt"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jardín Infantil Las Princesitas</td>
                    <td>2</td>
                    <td>
                        <a href="#ventana" data-toggle="modal">
                            <span class="label label-primary" data-toggle="tooltip" title="Deshabilitar Jardín">Habilitado</span>
                        </a>
                    </td>
                    <td>10 de Noviembre de 2010</td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Abrir Perfil">
                            <i class="fa fa-folder-open fa-1x" aria-hidden="true" style="color:#00a0f0;font-size:13pt"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Editar">
                            <i class="fa fa-pencil-square-o fa-1x" aria-hidden="true" style="color:#7fbb00;font-size:13pt"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="tooltip" title="Eliminar">
                            <i class="fa fa-times" aria-hidden="true" style="color:#ff3322;font-size:14pt"></i>
                        </a>
                    </td>
                </tr>
              </table>
                
            
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <center>
            <ul class="pagination pagination-sm no-margin">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
            </center>    
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

    <div class="modal fade modal-danger" id="ventana">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Habilitar Jardínes</h4>
          </div>
          <div class="modal-body">
            <p>Jardín Mis primeros Pasos</p>
            <br>
            <form>
                <input type="radio" name="radio" value="habilitar" checked="checked"> Habilitar&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="radio" value="deshabilitar"> Deshabilitar
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline">Guardar Cambios</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


