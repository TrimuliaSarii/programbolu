<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data</title>
<style>
h1 {
text-align: center;
}

table, td,
th {
border: 1px solid #ddd; text-align: left;
}

table {
border-collapse: collapse; width: 100%;
}

th,
td {
padding: 15px;
}
</style>
</head>

<body>
<h1>Laporan Data Kue</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>ID</th>
<th>nama konsumen</th>
<th>nama kue</th>
<th>harga kue</th>
<th>ukuran kue</th>
</tr>
</thead>
<tbody>
<?php
 
 $result = $model->tampil_data(); if (!empty($result)) {
    foreach ($result as $data) : ?>
    <tr>
    <td><?= $index++ ?></td>
    <td><?= $data->ID ?></td>
    <td><?= $data->namakonsumen ?></td>
    <td><?= $data->namakue ?></td>
    <td><?= $data->hargakue ?></td>
    <td><?= $data->ukurankue ?></td>
    </tr>
    <?php endforeach;
    } else { ?>
    <tr>
    <td colspan="9">Belum ada data pada tabel data kue.</td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <script>
    window.print();
    </script>
    </body>
    
    </html>
    