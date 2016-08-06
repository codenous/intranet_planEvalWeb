  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $tituloMantenedor; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> PlanEvalWeb</a></li>
        <li><a href="#">Funcionarios</a></li>
        <li class="active">Registro de Funcionarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-primary ">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $tituloFormulario; ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>rut funcionario</label>
                        <input type="text" class="form-control" placeholder="11.222.333-4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>primer nombre</label>
                        <input type="text" class="form-control" placeholder="Marcela">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>segundo nombre</label>
                        <input type="text" class="form-control" placeholder="Alexandra">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>apellido paterno</label>
                        <input type="text" class="form-control" placeholder="Durán">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>apellido materno</label>
                        <input type="text" class="form-control" placeholder="Rojas">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>fecha nacimiento</label>
                        <input type="date" class="form-control" placeholder="Marcela">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>fono contacto</label>
                        <input type="text" class="form-control" placeholder="+569 22334455">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>email</label>
                        <input type="email" class="form-control" placeholder="marcela.duran@gmail.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Calle</label>
                        <input type="text" class="form-control" placeholder="Manuel Rodriguez">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Block.</label>
                        <input type="text" class="form-control" placeholder="4568">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Nro.</label>
                        <input type="text" class="form-control" placeholder="4568">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sector</label>
                        <input type="text" class="form-control" placeholder="Villa Cap">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Comuna</label>
                        <select class="form-control">
                            <option> Comunas</option>
                            <option>------------------</option>
                            <option> Talcahuano</option>
                            <option> Concepción</option>
                            <option> Chiguayante</option>
                            <option> Tomé</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>nivel escolaridad</label>
                        <select class="form-control">
                            <option> Nivel Escolaridad</option>
                            <option>------------------</option>
                            <option> Sin Estudios</option>
                            <option> Enseñanza Básica Incompleta</option>
                            <option> Enseñanza Básica Completa</option>
                            <option> Enseñanza Media Incompleta</option>
                            <option> Enseñanza Media Completa</option>
                            <option> Enseñanza Superior Incompleta</option>
                            <option> Enseñanza Superior Completa</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Título</label>
                        <select class="form-control">
                            <option> Título Profesional</option>
                            <option>------------------</option>
                            <option> Sin título</option>
                            <option> Técnico en Asistente de Párvulos</option>
                            <option> Educadora de Párvulos</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control">
                            <option> Cargos</option>
                            <option>------------------</option>
                            <option> Directora del Jardín</option>
                            <option> Educadora de Párvulos</option>
                            <option> Asistente de Párvulos</option>
                            <option> Manipuladora de Alimentos</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
                        <input type="date" class="form-control" placeholder="Username">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Registro Funcionario</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>


