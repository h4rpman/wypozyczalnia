<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:45:53
  from 'D:\wamp64\www\wypozyczalnia\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282b801b5c4c1_03959591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddfb50e819101eb2e45ac1c903cabbe562c8b4e9' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\index.tpl',
      1 => 1652733447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6282b801b5c4c1_03959591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en">
	<head>
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Wypożyczalnia sprzetu</title>
		<meta name="description" content="Wypożyczalnia sprzetu" />
		<meta name="author" content="Karol Czopka" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" href="../htdocs/css/style.css" />
	</head>
	<?php echo '<script'; ?>
>
	
	function ajaxPostForm(id_form,url,id_to_reload)
{
    var form = document.getElementById(id_form);
    var formData = new FormData(form); 
    var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById(id_to_reload).innerHTML = xmlHttp.responseText;
		}
	}
    xmlHttp.open("POST", url, true); 
    xmlHttp.send(formData); 
}
<?php echo '</script'; ?>
>
	
	<body>
		<div class="main">

			<div class="page">

                <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
				<!-- CONTENT -->

				<div class="content">

                    <?php $_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					
				</div> <!-- /CONTENT -->

                <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>			
				
			</div> <!-- /PAGE -->

		</div>	<!-- /MAIN -->
			
	</body>

</html><?php }
}
