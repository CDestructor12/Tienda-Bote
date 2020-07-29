<?php
    include('php/pcabeza.php');
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="propietario_mant.php">Listado de Propietarios</a></li>
    <li class="active">Nuevo Propietarios</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nuevo Propietario</h1>
    </div>

    <div class="panel-body">
        <form action="php/registros/propietario.php?accion=INS" method="POST">
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
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Fecha de Nacimiento <span style="color:red">*</span></label>
                        <input class="form-control" type="date" name="fechaN" id="fechaN" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Experiencia <span style="color:red">*</span></label>
                        <textarea class="form-control" name="experiencia" id="experiencia"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <a href="propietario_mant.php" class="btn btn-danger">Atras</a>
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    
    </div>
    <!-- <div class="panel-body">
        <div class="container" style="width: 450px;">
            <div class="col-6 ml-4">
                <div class="myform form">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control my-input" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" class="form-control my-input" placeholder="Direccion">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="number" min="0" name="telefono" id="telefono" class="form-control my-input" placeholder="(000) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="fechanac"> Fecha de Nacimiento</label>
                        <input type="text" min="0" name="fechanacimiento" id="fechanac" class="form-control my-input" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <label for="experiencia"> Experiencia</label>
                        <select class="form-control my-input" id="experiencia" name="experiencia">
                        <option selected disabled hidden>Seleccionar una</option>
                            <option value="Ninguna">Ninguna</option>
                            <option value="Minima">Minima</option>
                            <option value="Suficiente">Suficiente</option>
                        </select>
                    </div>
                    <div class="text-center ">
                        <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm">Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
</div>  -->

<!-- Fin del Panel -->

<?php
    include('php/ppie.php');
?>