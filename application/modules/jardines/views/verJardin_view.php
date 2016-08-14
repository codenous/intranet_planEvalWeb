  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $tituloMantenedor; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Jardines</a></li>
        <li class="active">Ver Jardín</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive" src="<?php echo base_url() ?>public/jardines/logo_jardin2.jpg" alt="User profile picture"
                        <h3 class="profile-username text-center">Jardín Infantil las mariposas</h3>
                        <p class="text-muted text-center">Inscrito desde Nov. 2016</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Directoras</b> <a class="pull-right">3</a>
                            </li>
                            <li class="list-group-item">
                                <b>Empleados</b> <a class="pull-right">25</a>
                            </li>
                            <li class="list-group-item">
                                <b>Párvulos</b> <a class="pull-right">54</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Acerca del Jardín</h3>
                    </div>
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Este Jardín</strong>
                        <p class="text-muted text-justify">
                            Jardín inscrito con nosotros desde Noviembre de 2016, además cuenta
                            con una matrícula con un valor de $250.000.- y una mensualidad de
                            $125.000.-
                        </p>
                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

                        <p class="text-muted">Canelo 345, Concepción, Región del BíoBío</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Niveles</strong>

                        <p>
                            <span class="label label-danger">Sala Cuna Menor</span>
                            <span class="label label-danger">Sala Cuna Mayor</span>
                            <span class="label label-warning">Nivel Medio I</span>
                            <span class="label label-warning">Nivel Medio II</span>
                            <span class="label label-success">Nivel Transición I</span>
                            <span class="label label-success">Nivel Transición II</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $tituloFormulario; ?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-instagram btn-sm" data-widget="collapse" title="Collapse">
                              <i class="fa fa-minus"></i></button>
                          </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Mes</th>
                                          <th>F. de Pago</th>
                                          <th>Cant. Párvulos</th>
                                          <th>Estado</th>
                                          <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Noviembre</td>
                                            <td>10 de Noviembre de 2016</td>
                                            <td>50</td>
                                            <td>
                                                <span class="label label-info">Cancelado</span>
                                            </td>
                                            <td>$50.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Diciembre</td>
                                            <td>10 de Diciembre de 2016</td>
                                            <td>40</td>
                                            <td>
                                                <span class="label label-info">Cancelado</span>
                                            </td>
                                            <td>$40.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Enero</td>
                                            <td>10 de Enero de 2017</td>
                                            <td>45</td>
                                            <td>
                                                <span class="label label-danger">Adeudado</span>
                                            </td>
                                            <td>$45.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</div>



