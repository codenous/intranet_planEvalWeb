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
            <div class="col-md-6 col-md-offset-3">
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
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Nivel</label>
                                    <select class="form-control">
                                        <option>Nivel Sala Cuna Menor</option>
                                        <option>Nivel Sala Cuna Mayor</option>
                                        <option>Nivel Intermedio I</option>
                                        <option>Nivel Intermedio II</option>
                                        <option>Nivel Transición I</option>
                                        <option>Nivel Transición II</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Periodo</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar-o"></i>
                                        </div>
                                        <input type="text" class="form-control" value="<?php echo date('Y') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Nombre Grupo</label>
                                    <input type="text" class="form-control" placeholder="grupo A">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Fecha Inicio</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" id="datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-dropbox pull-right"><i class="fa fa-save"></i> Crear Niveles</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Listado de Niveles Anuales</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-instagram btn-sm" data-widget="collapse" data-toggle="tooltip" title="minimizar">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>Nombre Nivel</th>
                                    <th>Periodo</th>
                                    <th>Estado</th>
                                    <th>Estado Contrucción</th>
                                    <th>Rango</th>
                                    <th colspan="3">Acciones</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nivel Sala Cuna Menor "Grupo A"</td>
                                        <td>2016</td>
                                        <td><span class="label label-info">Activo</span></td>
                                        <td><span class="label label-danger">Sin Datos</span></td>
                                        <td>3 meses a 18 meses (0 a 1 año)</td>
                                        <td>
                                            <a href="<?php echo base_url() ?>niveles/Index/verNivelAnual">
                                                <i class="fa fa-folder-open fa-1x" aria-hidden="true" style="color:#00a0f0;font-size:13pt" data-toggle="tooltip" title="Ver Nivel"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#ventana" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                                                <i class="fa fa-pencil-square-o fa-1x" aria-hidden="true" style="color:#7fbb00;font-size:13pt" data-toggle="tooltip" title="Editar"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <i class="fa fa-times" aria-hidden="true" style="color:#ff3322;font-size:14pt" data-toggle="tooltip" title="Eliminar"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nivel Sala Cuna Menor "Grupo B"</td>
                                        <td>2016</td>
                                        <td><span class="label label-info">Activo</span></td>
                                        <td><span class="label label-warning">En Construcción</span></td>
                                        <td>3 meses a 18 meses (0 a 1 año)</td>
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
                                        <td>1</td>
                                        <td>Nivel Medio Menor "Grupo A"</td>
                                        <td>2016</td>
                                        <td><span class="label label-info">Activo</span></td>
                                        <td><span class="label label-success">OK</span></td>
                                        <td>3 meses a 18 meses (0 a 1 año)</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
        
    </section>
</div>

<div class="modal fade modal-primary" id="ventana">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Modificar Niveles Anuales</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>Nivel</label>
                            <select class="form-control">
                                <option>Nivel Sala Cuna Menor</option>
                                <option selected="selected">Nivel Sala Cuna Mayor</option>
                                <option>Nivel Intermedio I</option>
                                <option>Nivel Intermedio II</option>
                                <option>Nivel Transición I</option>
                                <option>Nivel Transición II</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Periodo</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar-o"></i>
                                </div>
                                <input type="text" class="form-control" value="<?php echo date('Y') ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>Nombre Grupo</label>
                            <input type="text" class="form-control" value="grupo A">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="datemask2" data-inputmask="'alias': 'dd/mm/yyyy'" value="<?php echo date('d/m/Y'); ?>" data-mask>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#datemask").inputmask("dd/mm/yyyy");
        $("#datemask2").inputmask("dd/mm/yyyy");
    });
</script>