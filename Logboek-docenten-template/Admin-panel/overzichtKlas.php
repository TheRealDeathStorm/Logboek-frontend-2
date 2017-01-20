<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 20-1-2017
 * Time: 13:35
 * Het overzicht van de klasen.
 */
?>
<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/menu.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Klassen overzicht</h1>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Klas: <!-- Gekozen klas volgens de geklikte knop. --></div>
            <div class="panel-body">
                <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th data-field="name" data-sortable="true">Naam <!-- Klas --></th>
                        <th data-field="number"  data-sortable="true">Student nummer <!-- Leerjaar klas --></th>
                        <th data-field="email" data-sortable="true">Email <!-- Opleiding --></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">

</div><!--/.row-->


</div><!--/.main-->

<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-table.js"></script>
</body>

</html>



