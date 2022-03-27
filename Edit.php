<?php
$id = $_GET['nim']; include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
<title>Edit Data Kue</title>
</head>

<body>
<h1>Edit Data Kue</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>ID</label>
<br>
<input type="text" name="ID" value="<?php echo $data->ID ?>">
<br>
<label>nama konsumen</label>
<br>
<input type="text" name="namakonsumen" value="<?php echo $data->namakonsumen ?>">
<br>
<label>nama kue</label>
<br>
<input type="text" name="namakue" value="<?php echo $data->namakue ?>">
<br>
<label>harga kue</label>
<br>
<input type="text" name="hargakue" value="<?php echo $data->hargakue ?>">
<br>
<label>ukuran kue</label>
<br>
<input type="text" name="ukurankue" value="<?php echo $data->ukurankue ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>

</html>