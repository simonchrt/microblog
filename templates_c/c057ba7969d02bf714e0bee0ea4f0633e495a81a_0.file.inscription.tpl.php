<?php
/* Smarty version 3.1.30, created on 2018-01-19 19:07:36
  from "C:\xampp\htdocs\microblog\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6233e82bd018_24970662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c057ba7969d02bf714e0bee0ea4f0633e495a81a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microblog\\inscription.tpl',
      1 => 1511375737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_5a6233e82bd018_24970662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['requetePasse']->value)) {
if ($_smarty_tpl->tpl_vars['requetePasse']->value == true) {?>
<!-- on indique a l'utilisateur que tout s'est bien passé et qu'il est maintenant inscrit -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">Vous &ecirc;tes maintenant inscrit(e)</p>
	<a class="btn btn-success"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['pseudoInvalide']->value)) {?>
<!-- On signale à l'utilisateur que son pseudo est deja utilisé-->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">Le pseudo <?php echo $_smarty_tpl->tpl_vars['pseudoInvalide']->value;?>
 est d&eacute;j&agrave; utilis&eacute;</p>
	<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['emailInvalide']->value)) {?>
<!-- On signale à l'utilisateur que son email est deja utilisé-->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">L'adresse email <?php echo $_smarty_tpl->tpl_vars['emailInvalide']->value;?>
 est d&eacute;j&agrave; utilis&eacute;e</p>
	<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
