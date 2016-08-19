<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $tituloMantenedor; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> PlanEvalWeb</a></li>
            <li><a href="#">Niveles</a></li>
            <li class="active">Armar Nivel Anual</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $tituloFormulario ?></h3>
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
                                        <input type="text" class="form-control" value="2016">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Nombre Grupo</label>
                                    <select class="form-control">
                                        <option>Grupo A</option>
                                        <option>Grupo B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Fecha Inicio</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" value="<?php echo date('d/m/Y') ?>" disabled="disabled">
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Guardar Nivel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de Niveles Anuales Periodo <?php echo date('Y')?> </h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <th>#</th>
                                <th>Nombre Nivel</th>
                                <th>Periodo</th>
                                <th>Estado</th>
                                <th>Estado Construcción</th>
                                <th>Rango</th>
                                <th colspan="4">Acciones</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sala Cuna Menor "Grupo A"</td>
                                    <td>2016</td>
                                    <td><span class="label label-info">Activo</span></td>
                                    <td><span class="label label-danger">Sin Datos</span></td>
                                    <td>3 meses a 18 meses (0 a 1 año)</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-folder-open" style="color:#00a0f0;font-size:13pt" data-toggle="tooltip" title="Abrir Nivel"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#modalArmarNivel" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                                            <i class="fa fa-user-plus" style="color:#016773;font-size:13pt" data-toggle="tooltip" title="Agregar Educadoras, Asistentes y Párvulos al Nivel"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-edit" style="color:#7fbb00;font-size:13pt" data-toggle="tooltip" title="Editar"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-close" style="color:#ff3322;font-size:14pt" data-toggle="tooltip" title="Eliminar"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    


<div class="modal modal-primary fade " id="modalArmarNivel">
    <div class="modal-dialog" style="width:95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Armar Nivel Anual</h4>
            </div>
            <div class="modal-body" style="background:rgb(236,240,245)">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="box-header with-border text-center">
                                <h3 class="box-title">Sala Cuna Menor "Grupo A"</h3>
                            </div>
                            <div class="box-body">
                                <div class="box-profile">
                                    <img class="profile-user-img img-responsive img-circle img-bordered-sm" src="http://localhost:8888/SistemasWeb/intranet_planEvalWeb/assets/img/user7-128x128.jpg">
                                    <h3 class="profile-username text-center text-aqua">Tía Marcel Rodriguez Díaz</h3>
                                    <p class="text-muted text-center">Educadora a Cargo del Nivel</p>
                                    <hr>
                                    <div style="margin-top:-15px;margin-bottom:-5px" class="text-center">
                                        <span class="label label-info">Primer Ciclo</span>
                                        <span class="label label-success">Sala Cuna Menor</span>
                                        <span class="label label-warning">3 meses a 2 años</span>
                                    </div>
                                    <hr>
                                    <div style="margin-top:-15px;margin-bottom:-10px">
                                        <b class="text-light-blue">Educadoras</b> <a class="pull-right">0</a>
                                    </div>
                                    <hr>
                                    <div style="margin-top:-15px;margin-bottom:-10px">
                                        <b class="text-light-blue">Asistentes</b> <a class="pull-right">0</a>
                                    </div>
                                    <hr>
                                    <div style="margin-top:-15px;margin-bottom:-10px">
                                        <b class="text-light-blue">Párvulos</b> <a class="pull-right">0</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer text-center">
                                <a class="" id="btnEducadora"><i class="btn btn-success fa fa-female" data-toggle="tooltip" title="Agregar Educadora(s)"></i></a>
                                <a class="" id="btnAsistente"><i class="btn btn-primary fa fa-users" data-toggle="tooltip" title="Agregar Asistente(s)"></i></a>
                                <a class="" id="btnParvulo"><i class="btn btn-danger fa fa-child" data-toggle="tooltip" title="Agregar Párvulos"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-9">
                        <div class="box">
                            <div id="divAgregarEducadorasModal">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Agregar Educadoras al Nivel</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <table class="table table-responsive table-bordered">
                                                <thead style="color:#6a737b">
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>
                                                        Rut
                                                    </th>
                                                    <th>
                                                        Nombre Educadora
                                                    </th>
                                                </thead>
                                                <tbody style="color:gray">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="text-center"><br><br>
                                                <a class="btn btn-google">
                                                    <i class=" fa fa-angle-double-left"></i>
                                                </a><br><br>
                                                <a class="btn btn-google">
                                                    <i class=" fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <table class="table table-responsive table-bordered">
                                                <thead style="color:#6a737b">
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>
                                                        Rut
                                                    </th>
                                                    <th>
                                                        Nombre Educadora
                                                    </th>
                                                    <th>
                                                        F. Registro
                                                    </th>
                                                </thead>
                                                <tbody style="color:gray">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="divAgregarAsistenteModal">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Agregar Asistentes al Nivel</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <table class="table table-responsive table-bordered">
                                                <thead style="color:#6a737b">
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>
                                                        Rut
                                                    </th>
                                                    <th>
                                                        Nombre Asistente
                                                    </th>
                                                </thead>
                                                <tbody style="color:gray">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="text-center"><br><br>
                                                <a class="btn btn-google">
                                                    <i class=" fa fa-angle-double-left"></i>
                                                </a><br><br>
                                                <a class="btn btn-google">
                                                    <i class=" fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <table class="table table-responsive table-bordered">
                                                <thead style="color:#6a737b">
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>
                                                        Rut
                                                    </th>
                                                    <th>
                                                        Nombre Asistente
                                                    </th>
                                                    <th>
                                                        F. Registro
                                                    </th>
                                                </thead>
                                                <tbody style="color:gray">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            11.222.333-4
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="divAgregarParvulosModal">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Agregar Párvulos al Nivel</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <table class="table table-responsive table-bordered">
                                                <thead style="color:#6a737b">
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>
                                                        Matrícula
                                                    </th>
                                                    <th>
                                                        Nombre Párvulo
                                                    </th>
                                                    <th>
                                                        Edad
                                                    </th>
                                                </thead>
                                                <tbody style="color:gray">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                        <div class="col-md-1">
                                            <div class="text-center"><br><br>
                                                <a class="btn btn-google">
                                                    <i class=" fa fa-angle-double-left"></i>
                                                </a><br><br>
                                                <a class="btn btn-google">
                                                    <i class=" fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-responsive table-bordered">
                                                <thead style="color:#6a737b">
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>
                                                        Matrícula
                                                    </th>
                                                    <th>
                                                        Nombre Párvulo
                                                    </th>
                                                    <th>
                                                        Edad
                                                    </th>
                                                    <th>
                                                        F. Registro
                                                    </th>
                                                </thead>
                                                <tbody style="color:gray">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>
                                                            16052001
                                                        </td>
                                                        <td>
                                                            Marcela Rodriguez Díaz
                                                        </td>
                                                        <td>
                                                            2 años, 11 meses
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<script> 
    $(document).ready(function(){
        $("#btnEducadora").click(function(){
            var div1 = document.getElementById("divAgregarEducadorasModal");
            var div2 = document.getElementById("divAgregarAsistenteModal");
            var div3 = document.getElementById("divAgregarParvulosModal");
            
            var btn1 = $("#btnEducadora").attr("disabled");
            var btn2 = $("#btnAsistente").removeAttr("disabled");
            var btn3 = $("#btnParvulo").removeAttr("disabled");
            
            div1.style.display = "block";
            div2.style.display = "none";
            div3.style.display = "none";
        });
        $("#btnAsistente").click(function(){
            var div1 = document.getElementById("divAgregarEducadorasModal");
            var div2 = document.getElementById("divAgregarAsistenteModal");
            var div3 = document.getElementById("divAgregarParvulosModal");
            
            var btn1 = $("#btnEducadora").removeAttr("disabled","disabled");
            var btn2 = $("#btnAsistente").attr("disabled","disabled");
            var btn3 = $("#btnParvulo").removeAttr("disabled","disabled");
            
            div1.style.display = 'none';
            div2.style.display = 'block';
            div3.style.display = 'none';
        });
        $("#btnParvulo").click(function(){
            var div1 = document.getElementById("divAgregarEducadorasModal");
            var div2 = document.getElementById("divAgregarAsistenteModal");
            var div3 = document.getElementById("divAgregarParvulosModal");
            
            var btn1 = $("#btnEducadora").removeAttr("disabled");
            var btn2 = $("#btnAsistente").removeAttr("disabled");
            var btn3 = $("#btnParvulo").attr("disabled");
            
            div1.style.display = "none";
            div2.style.display = "none";
            div3.style.display = "block";
        });
    });
</script>
