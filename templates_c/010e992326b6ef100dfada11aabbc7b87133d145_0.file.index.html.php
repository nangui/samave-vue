<?php
/* Smarty version 3.1.30, created on 2019-04-08 02:37:04
  from "C:\xampp\htdocs\samanemvc-master\src\view\welcome\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5caa97b0be1e79_33787184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '010e992326b6ef100dfada11aabbc7b87133d145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samanemvc-master\\src\\view\\welcome\\index.html',
      1 => 1554683822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caa97b0be1e79_33787184 (Smarty_Internal_Template $_smarty_tpl) {
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

		<main id="app">
			
			<div class="container" style="height: 80vh;">
				<div class="row flex-column justify-content-center align-items-center h-100">
					<welcome name="Ngor Seck" />
				</div>
			</div>

		</main>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_public']->value;?>
js/app.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
