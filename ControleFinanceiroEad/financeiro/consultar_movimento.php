<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once "_head.php";
include_once "_menu.php";
?>

<body>
    <div id="wrapper">
        <?php
        include_once "_head.php";
        include_once "_menu.php";
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Consultar movimento</h2>
                        <h5>Consulte todos os movimento em um determinado período. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
            <div class="col-md-12">
                <div class="form-group">
                    <label>Tipo do movimento*</label>
                    <select class="form-control">
                        <option value="0">TODOS</option>
                        <option value="1">Entrada</option>
                        <option value="2">Saída</option>
                    </select>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data incial*</label>
                        <input type="date" class="form-control" placeholder="Coloque a data do movimento." id="inicio"/>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data final*</label>
                        <input type="date" class="form-control" placeholder="Coloque a data do movimento." id="final" />
                    </div>
                </div>
                <center>
                    <button class="btn btn-info" onclick="return ValidarConsultaPeriodo()">Pesquisar</button>
                </center>
                <hr>





                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Resultado encontrado.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Tipo</th>
                                                <th>Categoria</th>
                                                <th>Empresa</th>
                                                <th>Conta</th>
                                                <th>Valor</th>
                                                <th>Observação</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>(data)</td>
                                                <td>(tipo)</td>
                                                <td>(categoria)</td>
                                                <td>(empresa)</td>
                                                <td>(conta)</td>
                                                <td>(valor)</td>
                                                <td>(observação)</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>