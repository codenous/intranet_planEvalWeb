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
                                    <br>
                                    <p class="lead">Datos del Jardín</p>
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nombre Jardín</label>
                                    <input type="text" class="form-control" value="jardín Infantil Mis Primeros Pasos">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Fono Contacto</label>
                                    <input type="text" class="form-control" value="41 2592407">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Correo Contacto</label>
                                    <input type="text" class="form-control" value="correocontactojardin@jardin.cl">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Calle</label>
                                    <input type="text" class="form-control" value="Manuel Rodriguez">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nro.</label>
                                    <input type="text" class="form-control" value="4568">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sector</label>
                                    <input type="text" class="form-control" value="Villa Cap">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Comuna</label>
                                    <select class="form-control">
                                        <option> Comunas</option>
                                        <option>------------------</option>
                                        <option selected="selected"> Talcahuano</option>
                                        <option> Concepción</option>
                                        <option> Chiguayante</option>
                                        <option> Tomé</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Matrícula</label>
                                    <input type="text" class="form-control" value="125.000">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Mensualidad</label>
                                    <input type="text" class="form-control" value="250.000">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"><br>
                                   <p class="lead">Directoras del Jardín</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group form-inline">
                                    <a id="agregarCampo" class="btn btn-success" href="#">Agregar Campos</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="campos_html"><br>
                                <div class="div_1" id="divdiv">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Datos Directora 1</label>
                                            <input type="text" class="form-control" value="11.222.333-4">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Margaret">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Alejandra">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Rocha">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Gonzalez">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label><br>
                                            <button type="button" class="btn btn-warning eliminar" id="div_1"><i class="fa fa-trash-o"></i> Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="div_2" id="divdiv">    
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Datos Directora 2</label>
                                            <input type="text" class="form-control" value="11.222.333-4">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Margaret">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Alejandra">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Rocha">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label>
                                            <input type="text" class="form-control" value="Gonzalez">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp</label><br>
                                            <button type="button" class="btn btn-warning eliminar" id="div_2"><i class="fa fa-trash-o"></i> Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Jardín</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>    
</div>
<script>
$(document).ready(function() {

    var MaxInputs       = 3; //Número Maximo de Campos
    var contenedor      = $("#campos_html"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    var x = $("#campos_html #divdiv").length+1;
    var FieldCount = x-1; //para el seguimiento de los campos

    $(AddButton).click(function (e) {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;
            //agregar campo
            $(contenedor).append('\
<div class="div_'+ FieldCount +'">\n\
<div class="col-md-2">\n\
    <label>Datos Directora</label>\n\
    <input type="text" class="form-control" name="rut_'+ FieldCount +'" id="rut_'+ FieldCount +'" placeholder="11.222.333-4"/>\n\
</div>\n\
<div class="col-md-2">\n\
    <label>&nbsp;</label>\n\
    <input type="text" class="form-control" name="prinom_'+ FieldCount +'" id="prinom_'+ FieldCount +'" placeholder="Primer Nombre'+ FieldCount +'"/>\n\
</div>\n\
<div class="col-md-2">\n\
    <label>&nbsp;</label>\n\
    <input type="text" class="form-control" name="segnom_'+ FieldCount +'" id="segnom_'+ FieldCount +'" placeholder="Segundo Nombre"/>\n\
</div>\n\
<div class="col-md-2">\n\
    <label>&nbsp;</label>\n\
    <input type="text" class="form-control" name="appat_'+ FieldCount +'" id="appat_'+ FieldCount +'" placeholder="Apellido Paterno"/>\n\
</div>\n\
<div class="col-md-2">\n\
    <label>&nbsp;</label>\n\
    <input type="text" class="form-control" name="apmat_'+ FieldCount +'" id="apmat_'+ FieldCount +'" placeholder="Apellido Materno"/>\n\
</div>\n\
<div class="col-md-2">\n\
    <div class="form-group">\n\
        <label>&nbsp</label><br>\n\
        <a type="button" class="btn btn-warning eliminar" id="div_'+ FieldCount +'"><i class="fa fa-trash-o"></i> Eliminar</a>\n\
    </div>\n\
</div>\n\
</div>');
            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
    
        if( x > 1 ) {
            var div = $(this).attr("id");
            //alert(div);
            $("div").remove( "."+div ); //eliminar el campo
            x--;
        }
        return false;
    });
});
</script>


