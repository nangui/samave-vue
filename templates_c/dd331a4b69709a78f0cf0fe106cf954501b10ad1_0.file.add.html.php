<?php
/* Smarty version 3.1.30, created on 2019-04-08 02:48:21
  from "C:\xampp\htdocs\samanemvc-master\src\view\test\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
  'version' => '3.1.30',
  'unifunc' => 'content_5caa9a556b5367_17455987',
  'has_nocache_code' => false,
  'file_dependency' => [
    'dd331a4b69709a78f0cf0fe106cf954501b10ad1' => [
      0 => 'C:\\xampp\\htdocs\\samanemvc-master\\src\\view\\test\\add.html',
      1 => 1554684497,
      2 => 'file',
    ],
  ],
  'includes' => [
  ],
], false)) {
    function content_5caa9a556b5367_17455987(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Samane MVC | Home Page</title>
		<!-- $url_public variable reference /public/dist/, and this is used for load the assets files like: image, js and css -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_public']->value; ?>
css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_public']->value; ?>
css/app.css" />
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow">
  			<a class="navbar-brand" href="#">
			    <img src="<?php echo $_smarty_tpl->tpl_vars['url_public']->value; ?>
image/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="Samane MVC logo" />
			    Samane MVC
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>	
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
">Accueil <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/index">Menu page test</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/getID/1">Menu page test 2</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/liste">Menu page test liste</a>
			      </li>
			    </ul>
			</div>
		</nav>
		<div class="col-md-8 col-12 offset-md-2" style="margin-top:150px;">
			<div class="card border-0 shadow">
				<div class="card-header bg-primary text-white">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="card-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {
            ?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {
                ?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php
            } else {
                ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php
            } ?>
					<?php
        } ?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value; ?>
Test/add">
						<div class="form-group">
							<label class="form-control-label">Valeur du test</label>
							<input class="form-control border-0 shadow-sm" type="text" name="valeur1" id="valeur1"/>
						</div>
						<div class="form-group">
							<label class="form-control-label">Valeur2 du test</label>
							<input class="form-control border-0 shadow-sm" type="text" name="valeur2" id="valeur2"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php
    }
}
