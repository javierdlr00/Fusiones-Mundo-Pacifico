@extends('layouts.index')

@section('title', 'Fusiones')  

@section('content')
<!-- INDEX FUSIONES -->

<!-- INDEX ESPECIALISTAS -->
<section class="content-header">
    <h1>
        FUSIONES
        <small>
            MP
        </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="/">
                <i class="fa fa-home"> 
                </i>
                Inicio
            </a>
        </li>
        <li class="active">
            Fusiones
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Calculo de Fusiones
                    </h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label>Código de la Ciudad</label>
                                <input type="text" name="codigo_ciudad" class="form-control" required="true" placeholder="Ej. VINA, QPUE, PUAL, etc.">
                            </div>

                            <div class="col-xs-3">
                                <label>Código de la troncal</label>
                                <input type="text" name="codigo_troncal" class="form-control" required="true" placeholder="Ej. T01, T02, T03, etc.">
                            </div>

                            <div class="col-xs-3">
                                <label>Código del HUB</label>
                                <input type="text" name="codigo_hub" class="form-control" required="true" placeholder="Ej. HUB1, HUB2, HUB3, etc.">
                            </div>

                            <div class="col-xs-3">
                                <label>¿Cuántas MT desea generar?</label>
                                <select type="text" name="cantidad_mt" class="form-control" required="true">
                                    <option value="">-- Seleccione --</option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>
                                        <option value="5"> 5 </option>
                                </select>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <!-- /.box-body -->
                    
                </div>
                <button type="button" class="btn btn-block btn-default">Default</button>
                <!-- /.box -->
            </div>
            <!-- /.box-primary -->
                <h3> MT Generadas </h3>
                <div class="box box-success">
                    <div class="box-body">
                    <label>MT0X</label>
                        <div class="row">
                            <div class="col-xs-3">
                                <span class="text-green"><b>Origen</b></span> - <span>Tipo Fibra Óptica</span>
                                <select type="text" name="tipo_fibra_origen" class="form-control" required="true">
                                    <option value="">-- Seleccione --</option>
                                        <option value="06"> F.O.06 </option>
                                        <option value="12"> F.O.12 </option>
                                        <option value="16"> F.O.16 </option>
                                        <option value="24"> F.O.24 </option>
                                        <option value="36"> F.O.36 </option>
                                        <option value="48"> F.O.48 </option>
                                        <option value="60"> F.O.60 </option>
                                        <option value="96"> F.O.96 </option>
                                        <option value="144"> F.O.144 </option>
                                </select>
                            </div>

                            <div class="col-xs-3">
                                <span class="text-green"><b>Origen</b></span> - <span>Minitubos Totales</span>
                                <select type="text" name="minitubos_origen" class="form-control" required="true">
                                    <option value="">-- Seleccione --</option>
                                        <option value="1"> 1 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>
                                        <option value="5"> 5 </option>
                                        <option value="6"> 6 </option>
                                        <option value="8"> 8 </option>
                                        <option value="12"> 12 </option>
                                </select>
                            </div>

                            <div class="col-xs-3">
                                <span class="text-green"><b>Origen</b></span> - <span>Filamentos por Minitubo</span>
                                <select type="text" name="filamentos_por_minitubo" class="form-control" required="true">
                                    <option value="">-- Seleccione --</option>
                                        <option value="4"> 4 </option>
                                        <option value="6"> 6 </option>
                                        <option value="8"> 8 </option>
                                        <option value="12"> 12 </option>
                                </select>
                            </div>

                            <div class="col-xs-3">
                                <span class="text-green"><b>Origen</b></span> - <span>Minitubos Utilizados</span>   
                                <input type="text" name="minitubos_utilizados" class="form-control" required="true">
                            </div>
                            
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-xs-3">
                                <span>Origen</span>
                                <input type="text" name="codigo_ciudad" class="form-control" required="true">
                            </div>

                            <div class="col-xs-3">
                                <span>Origen</span>
                                <input type="text" name="codigo_ciudad" class="form-control" required="true">
                            </div>

                            <div class="col-xs-3">
                                <span>Origen</span>
                                <input type="text" name="codigo_ciudad" class="form-control" required="true">
                            </div>

                            <div class="col-xs-3">
                                <span>Origen</span>
                                <input type="text" name="codigo_ciudad" class="form-control" required="true">
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>
<!-- /.section --> 





@endsection
