<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($ID, $namakonsumen, $namakue, $hargakue, $ukurankue)
{
    $sql = "INSERT INTO tbl_datakue (ID, namakonsumen,namakue,hargakue,ukurankue) VALUES ('$ID', '$namakonsumen', '$namakue', '$hargakue', '$ukurankue')";
    $this->conn->query($sql);
}
public function tampil_data() 
{
$sql = "SELECT * FROM tbl_datakue";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM tbl_datakue WHERE ID='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($ID, $namakonsumen, $namakue, $hargakue, $ukurankue)
    {




    $sql = "UPDATE tbl_datakue SET ID='$ID', namakonsumen='$namakonsumen', namakue='$namakue', hargakue='$hargakue', ukurankue='$ukurankue' WHERE ID='$ID'";
    $this->conn->query($sql);
    }
    public function delete($kode)
    {
   
    $sql = "DELETE FROM tbl_datakue WHERE ID='$kode'";
    $this->conn->query($sql);
    }
    }
    