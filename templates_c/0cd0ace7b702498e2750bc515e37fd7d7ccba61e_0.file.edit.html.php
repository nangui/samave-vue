<?php
/* Smarty version 3.1.30, created on 2019-03-11 01:57:09
  from "/var/www/html/Samane_workspace/samanemvc/src/view/test/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
  'version' => '3.1.30',
  'unifunc' => 'content_5c85c075279cd2_09874216',
  'has_nocache_code' => false,
  'file_dependency' => [
    '0cd0ace7b702498e2750bc515e37fd7d7ccba61e' => [
      0 => '/var/www/html/Samane_workspace/samanemvc/src/view/test/edit.html',
      1 => 1525255662,
      2 => 'file',
    ],
  ],
  'includes' => [
  ],
], false)) {
    function content_5c85c075279cd2_09874216(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/index">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/getID/1">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/liste">Menu page test liste</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/update">
						<div class="form-group">
							<label class="control-label">ID du test</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {
            ?> <?php echo $_smarty_tpl->tpl_vars['test']->value['ID']; ?>
 <?php
        } ?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Valeur du test</label>
							<input class="form-control" type="text" name="valeur1" id="valeur1" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {
            ?> <?php echo $_smarty_tpl->tpl_vars['test']->value['valeur1']; ?>
 <?php
        } ?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Valeur2 du test</label>
							<input class="form-control" type="text" name="valeur2" id="valeur2" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {
            ?> <?php echo $_smarty_tpl->tpl_vars['test']->value['valeur2']; ?>
 <?php
        } ?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php
    }
}
