<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $tituloMantenedor; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pagos</a></li>
        <li class="active">Registro de Pago</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="box box-danger">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Filtro de Pagos</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Mes</label>
                                    <select class="form-control">
                                        <option>Enero</option>
                                        <option>Febrero</option>
                                        <option>Marzo</option>
                                        <option>Abril</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Periodo</label>
                                    <input type="text" class="form-control" placeholder="<?php echo date('Y') ?>" value="<?php echo date('Y') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-info pull-right">Filtrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $tituloFormulario; ?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-instagram btn-sm" data-widget="collapse" title="Collapse">
                              <i class="fa fa-minus"></i></button>
                          </div>
                    </div>
                <form>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Jardín</th>
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
                                                <td>Jardín Infantil Las Mariposas</td>
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
                                                <td>Jardín Infantil Las Gaviotas</td>
                                                <td>Noviembre</td>
                                                <td>10 de Noviembre de 2016</td>
                                                <td>50</td>
                                                <td>
                                                    <span class="label label-danger">Sin Pagar</span>
                                                </td>
                                                <td>$50.000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Jardín Infantil Las Princesitas</td>
                                                <td>Noviembre</td>
                                                <td>10 de Noviembre de 2016</td>
                                                <td>50</td>
                                                <td>
                                                    <span class="label label-success">No Pago Aún</span>
                                                </td>
                                                <td>$50.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    </div>
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
                </form>
                </div>
            </div>
        </div>
    </section>    
</div>

