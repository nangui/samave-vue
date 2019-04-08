<?php
/* Smarty version 3.1.30, created on 2019-04-08 02:43:29
  from "C:\xampp\htdocs\samanemvc-master\src\view\test\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5caa993141b1f4_44093370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feddeaf08dcd0117311bb37fc1b0cb21e8bfe3b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samanemvc-master\\src\\view\\test\\liste.html',
      1 => 1554684200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caa993141b1f4_44093370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Samane MVC | Home Page</title>
		<!-- $url_public variable reference /public/dist/, and this is used for load the assets files like: image, js and css -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_public']->value;?>
css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_public']->value;?>
css/app.css" />
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow">
  			<a class="navbar-brand" href="#">
			    <img src="<?php echo $_smarty_tpl->tpl_vars['url_public']->value;?>
image/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="Samane MVC logo" />
			    Samane MVC
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>	
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a>
			      </li>
			    </ul>
			</div>
		</nav>
		<div class="col-md-8 col-12 offset-md-2" style="margin-top:150px;">
			<div class="card border-0 shadow">
				<div class="card-header bg-primary text-white">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="card-body">
					<div class="alert alert-success" style="font-size:14px; text-align:justify;">
						Merci, l'équipe samanemvc vous remercie :) : 
						je vous ai préparé un CRUD qui marche, il suffit tout simplement d'importer
						la base de données qui se trouve dans le dossier src/view puis test (src/view/test);
						cette base s'appelle samane_test.sql et elle comporte une seule table nommée test.
						ça vous sera très utile j'espère.
						<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
						puis éditez le fichier database.php. Mettez à on l'etat de la base puis cliquez sur le menu <b>Menu page test liste</b>! Bon code!!!!  :)
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Valeur 1</th>
									<th>Valeur 2</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['ID'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['valeur1'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['valeur2'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/delete/<?php echo $_smarty_tpl->tpl_vars['test']->value['ID'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/edit/<?php echo $_smarty_tpl->tpl_vars['test']->value['ID'];?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a class="btn btn-primary mx-auto mb-2" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/add">Ajout d'un test</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
