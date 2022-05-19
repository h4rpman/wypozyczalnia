<?php
include('config.php');

if (!empty($_SESSION)) {

    if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {

        print("<p>Użytkownik zalogowany - przed kolejną próbą logowania,  <a href=\"wyloguj.php\">wyloguj się</a></p>");
    }
}

    else{

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if(isset($_GET['login']) OR isset($_GET['haslo'])) {

        if ( $_GET['login'] != '' ) { 
            
            exit; // czy ktoś probował mieszać GET, jeśli tak to przerwij proces


        }

        if ( $_GET['haslo'] != '' ) {
            
            exit; // czy ktoś probował mieszać GET, jeśli tak to przerwij proces
        
        }
    }


if ( !$login OR empty($login) ) {
        
    $smarty->assign('errors', 'Uzupelnij pole z loginem');
}

if ( !$haslo OR empty($haslo) ) {

    $smarty->assign('errors', 'Uzupelnij pole z haslem');
}

$haslo = md5($haslo); 

  // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
  $istnick = mysqli_fetch_array(mysqli_query($connection, "SELECT COUNT(*) FROM `wyp_uzytkownicy` WHERE `nick` = '$login' AND `haslo` = '$haslo'")); //  AND `haslo` = 'md5($haslo)'

  if ( $istnick[0] == 0 ) {

    $smarty->assign('errors', 'Logowanie nieudane. Sprawdź pisownię nicku oraz hasła.');
  } 
  else {


    $result = mysqli_query($connection, "SELECT id_grupy FROM wyp_przynaleznosc p LEFT JOIN wyp_uzytkownicy u ON u.id = p.id_uzytkownika WHERE u.nick='$login'");

    $grupy = [];

    while ($row = mysqli_fetch_array($result)) {
        $grupy[] = $row['id_grupy']; 
    }

    $_SESSION['nick'] =  $login;
    $_SESSION['haslo'] = $haslo;
    $_SESSION['grupy'] = $grupy;
    
    $smarty->assign('isLogged',true);
  }

  $_GET['page'] = 'home';
  $smarty->display('index.tpl');
    
}
  ?>