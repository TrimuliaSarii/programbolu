<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>online_kue</title>
</head>

<body>
<div class="container">
<h1>Data Kue</h1>
<a href="create.php" class="btn btn-primary">Tambah Data</a>
<br>
<a href="print.php" target="_blank" class="btn btn-success mt-2">Cetak Data</a>
<br>
<table class="table">
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
<td>
<a name="edit" id="edit" href="edit.php?nim=<?= $data->ID ?>">Edit</a>
<a name="hapus" id="hapus" href="proses.php?nim=<?= $data->ID ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else { ?>
<tr>
<td colspan="9">Belum ada data pada tabel data
kue.</td>
</tr>
 
<?php } ?>
</tbody>
</table>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>