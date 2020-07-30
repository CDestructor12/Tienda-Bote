<?php
    include('php/pcabeza.php');
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="tripulacion_mant.php">Listado de Tripulaciónes</a></li>
    <li class="active">Nueva Tripulacion</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nueva Tripulacion</h1>
    </div>

    <div class="panel-body">
        <form action="php/registros/tipos_tripulacion.php?accion=INS" method="POST">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Nombres <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Juan Canahuate" require>
                    </div>
                </div>    
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Dirección <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Primavera #14, Bonao" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Telefono <span style="color:red">*</span></label>
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="809-555-5555" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Numero de Horas <span style="color:red">*</span></label>
                        <input class="form-control" type="number" name="num_h" id="num_h" placeholder="2" require>
                    </div>
                </div>    
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Valor por Hora <span style="color:red">*</span></label>
                        <input class="form-control" type="number" name="valor_h" id="valor_h" placeholder="5" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <a href="tripulacion_mant.php" class="btn btn-danger">Atras</a>
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
<!-- Fin del Panel -->

<?php
    include('php/ppie.php');
?>