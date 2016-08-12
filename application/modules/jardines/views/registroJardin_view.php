  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $tituloMantenedor; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Jardines</a></li>
        <li class="active">Registro de Jardín</li>
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
            <div class="content">
            <script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft"
                    });
                });
            </script>

            <div id="wizard">
                <h2>Datos del Jardín</h2>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               <p class="lead">Datos del Jardín</p>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nombre Jardín</label>
                                <input type="text" class="form-control" placeholder="jardín Infantil Mis Primeros Pasos">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Fono Contacto</label>
                                <input type="text" class="form-control" placeholder="41 2592407">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Correo Contacto</label>
                                <input type="text" class="form-control" placeholder="correocontactojardin@jardin.cl">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" class="form-control" placeholder="Manuel Rodriguez">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Valor Matrícula</label>
                                <input type="text" class="form-control" placeholder="125.000">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Valor Mensualidad</label>
                                <input type="text" class="form-control" placeholder="250.000">
                            </div>
                        </div>
                    </div>        
                </section>

                <h2>Datos de Directora(s)</h2>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               <p class="lead">Registro de Directoras del Jardín</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Rut Directora</label>
                                <input type="text" class="form-control" placeholder="11.111.111-1">
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Primer Nombre</label>
                                <input type="text" class="form-control" placeholder="Marcela">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Segundo Nombre</label>
                                <input type="text" class="form-control" placeholder="Alejandra">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Rodriguez">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Díaz">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">   
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Rut Directora</label>
                                <input type="text" class="form-control" placeholder="11.111.111-1">
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Primer Nombre</label>
                                <input type="text" class="form-control" placeholder="Marcela">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Segundo Nombre</label>
                                <input type="text" class="form-control" placeholder="Alejandra">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Rodriguez">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Díaz">
                            </div>
                        </div>
                    </div>
                </section>

                <h2>Módulos del Sistema</h2>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Módulos Directora</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="checkbox"> Funcionarios del Jardín<br>
                                    <input type="checkbox"> Cuentas de Usuarios<br>
                                    <input type="checkbox"> Matrícula de Párvulos<br>
                                    <input type="checkbox"> Niveles del Jardín<br>
                                    <input type="checkbox"> Unidades de Contenido<br>
                                    <input type="checkbox"> Aprobar Planificaciones de Educadoras<br>
                                    <input type="checkbox"> Informes<br>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    
                </section>

                <h2>Forth Step</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
            </div>
        </div>            
        </div>
      </div>
    </section>
  </div>


