<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$ID = $_POST['ID'];
$namakonsumen = $_POST['namakonsumen'];
$namakue = $_POST['namakue'];
$hargakue = $_POST['hargakue'];
$ukurankue = $_POST['ukurankue'];
$model = new Model();
$model->insert($ID, $namakonsumen, $namakue, $hargakue, $ukurankue ); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
   
$ID = $_POST['ID'];
$namakonsumen = $_POST['namakonsumen'];
$namakue = $_POST['namakue'];
$hargakue = $_POST['hargakue']; 
$ukurankue = $_POST['ukurankue'];

    $model = new Model();
   $model->update($ID, $namakonsumen, $namakue, $hargakue, $ukurankue ); header('location:index.php');
}
    if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }