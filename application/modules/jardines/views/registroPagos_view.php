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
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo Filtro</label>
                                    <select class="form-control">
                                        <option>Todos</option>
                                        <option>Cancelados</option>
                                        <option>Adeudados</option>
                                        <option>No Aún</option>
                                    </select>
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
                                <div class="form-group">
                                   <p class="lead">Datos del Jardín</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="checktodos"></th>
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
                                                <td><input type="checkbox" name="elemento1" value="elemento1" class="ck"></td>
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
                                                <td><input type="checkbox" name="elemento2" value="elemento2" class="ck"></td>
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
                                                <td><input type="checkbox" name="elemento3" value="elemento3" class="ck"></td>
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
                        <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-save"></i> Registrar Pagos</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>    
</div>
<script>
    $(document).ready(function(){
        //Checkbox
	$("input[name=checktodos]").change(function(){
		$('input[type=checkbox]').each( function() {			
			if($("input[name=checktodos]:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});
	});
    });
</script>

