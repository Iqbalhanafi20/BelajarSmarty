<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 05:04:24
  from 'C:\xampp\htdocs\BelajarSmarty\templates\belajar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06893836b611_56327904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aea7bc4b16d5213ebba518aff6173ab5c4b45ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BelajarSmarty\\templates\\belajar.tpl',
      1 => 1594263661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06893836b611_56327904 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>
            <?php echo $_smarty_tpl->tpl_vars['judul']->value;?>

        </title>
    </head>
    <body>
    <?php echo $_smarty_tpl->tpl_vars['pesan']->value;?>
<br>
    <h3><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</h3>
    </body>
</html><?php }
}
