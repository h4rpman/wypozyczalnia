{* Smarty *}

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
	<script>
	
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
</script>
	
	<body>
		<div class="main">

			<div class="page">

                {include file="header.tpl"}
			
				<!-- CONTENT -->

				<div class="content">

                    {include file="content.tpl"}
					
				</div> <!-- /CONTENT -->

                {include file="footer.tpl"}			
				
			</div> <!-- /PAGE -->

		</div>	<!-- /MAIN -->
			
	</body>

</html>