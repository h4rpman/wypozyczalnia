<?php 

//ini_set('display_errors', 1);

$DB_HOSTNAME="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";
$DB_DATABASE="wypozyczalnia";
$DB_QUERY_LIMIT=5;



$connection = mysqli_connect($DB_HOSTNAME,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die(mysql_error()."Nie mozna polaczyc sie z baza danych. Prosze chwile odczekac i sprobowac ponownie.");
mysqli_query($connection, "SET NAMES 'utf8'");

// initialize smarty
require_once('../libs/smarty-4.1.0/libs/Smarty.class.php');


$smarty = new Smarty();

if (session_status() == PHP_SESSION_NONE) {

    session_start();

}

if (isset($_SESSION['nick']) && isset($_SESSION['haslo']) ) {
    $smarty->assign('isLogged',true);
}

else {
    $smarty->assign('isLogged',false);
}

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setConfigDir('../configs/');
$smarty->setCacheDir('../cache/');

?>