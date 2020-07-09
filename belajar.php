<?php
require_once "libs/Smarty.class.php";

$smarty = new Smarty();

$smarty->assign("pesan","Halo, Selamat Datang");
$smarty->assign("nama","Iqbal Hanafi");
$smarty->assign("judul","Halo Smarty");
$smarty->display("belajar.tpl");


?>