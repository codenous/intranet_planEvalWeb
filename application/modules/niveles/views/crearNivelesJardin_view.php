<div class="content-wrapper">
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
    <section class="content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $tituloFormulario; ?></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" title="Collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="form-group">
                                    <label>Niveles Jardín Infantil</label>
                                    <select class="form-control">
                                        <option>Niveles</option>
                                        <option>----------------------------------</option>
                                        <option>Nivel Sala Cuna Menor</option>
                                        <option>Nivel Sala Cuna Mayor</option>
                                        <option>Nivel Intermedio I</option>
                                        <option>Nivel Intermedio II</option>
                                        <option>Nivel Transición I</option>
                                        <option>Nivel Transición II</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-dropbox pull-right"><i class="fa fa-save"></i> Agregar Nivel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-header text-center with-border">
                        <h3 class="box-title">Lista Niveles del Jardín</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <th>#</th>
                                <th>Nombre Nivel</th>
                                <th>Tipo Nivel</th>
                                <th>Ciclo</th>
                                <th style="text-align:center">Acciones</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nivel Sala Cuna Menor</td>
                                    <td>Nivel Sala Cuna</td>
                                    <td><span class="label label-success">Primer Ciclo</span></td>
                                    <td style="text-align:center"><a href="#"><i class="fa fa-close" data-toggle="tooltip" title="Eliminar Nivel" style="color:#ff3322;font-size:14pt"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nivel Sala Cuna Mayor</td>
                                    <td>Nivel Sala Cuna</td>
                                    <td><span class="label label-success">Primer Ciclo</span></td>
                                    <td style="text-align:center"><a href="#"><i class="fa fa-close" data-toggle="tooltip" title="Eliminar Nivel" style="color:#ff3322;font-size:14pt"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nivel Intermedio I</td>
                                    <td>Nivel Medio</td>
                                    <td><span class="label label-success">Primer Ciclo</span></td>
                                    <td style="text-align:center"><a href="#"><i class="fa fa-close" data-toggle="tooltip" title="Eliminar Nivel" style="color:#ff3322;font-size:14pt"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nivel Intermedio II</td>
                                    <td>Nivel Medio</td>
                                    <td><span class="label label-warning">Segundo Ciclo</span></td>
                                    <td style="text-align:center"><a href="#"><i class="fa fa-close" data-toggle="tooltip" title="Eliminar Nivel" style="color:#ff3322;font-size:14pt"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nivel Transición I</td>
                                    <td>Nivel Transición</td>
                                    <td><span class="label label-warning">Segundo Ciclo</span></td>
                                    <td style="text-align:center"><a href="#"><i class="fa fa-close" data-toggle="tooltip" title="Eliminar Nivel" style="color:#ff3322;font-size:14pt"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Nivel Transición II</td>
                                    <td>Nivel Transición</td>
                                    <td><span class="label label-warning">Segundo Ciclo</span></td>
                                    <td style="text-align:center"><a href="#"><i class="fa fa-close" data-toggle="tooltip" title="Eliminar Nivel" style="color:#ff3322;font-size:14pt"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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


