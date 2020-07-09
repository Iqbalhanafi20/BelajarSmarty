<?php 
require_once "pegawai.php";
require_once "libs/Smarty.class.php";

$pegawai = new Pegawai();
$pegawai->setNamaDepan("Alif");
$pegawai->setNamaBelakang("Hamzah");
$pegawai->setJabatan("Staff ICT");

$smarty = new Smarty();
$smarty->assign("judul","Penanganan Objek");
$smarty->assign("pegawai",$pegawai);
$smarty->display("pegawai.tpl");
?>