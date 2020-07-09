<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 05:28:04
  from 'C:\xampp\htdocs\BelajarSmarty\templates\pegawai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f068ec4ccf3f3_43372964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7cc57a7fc0fd7cd3729945d69264d21a453f15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BelajarSmarty\\templates\\pegawai.tpl',
      1 => 1594265148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f068ec4ccf3f3_43372964 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</title>
    </head>
    <body>
        Nama depan : <?php echo $_smarty_tpl->tpl_vars['pegawai']->value->getNamaDepan();?>
<br>
        Nama Belakang : <?php echo $_smarty_tpl->tpl_vars['pegawai']->value->getNamaBelakang();?>
<br>
        Jabatan : <?php echo $_smarty_tpl->tpl_vars['pegawai']->value->getJabatan();?>
<br>
    </body>
</html><?php }
}
