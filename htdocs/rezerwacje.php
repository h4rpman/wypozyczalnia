<?php include("config.php");

if (!empty($_SESSION)) {

    if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {


        if (in_array(2,$_SESSION['grupy'])) {

            $wystepuje = true;
            $error = 0;

        }

    }

    if (isset($wystepuje) && $wystepuje == true) {

        $wpisy = mysqli_query($connection, "SELECT * FROM wyp_instrumenty WHERE wydany=false AND zajety_od IS NOT NULL AND zajety_do IS NOT NULL");

        $smarty->assign('instrumenty_niewydane',$wpisy);

        $wpisy = mysqli_query($connection, "SELECT * FROM wyp_instrumenty WHERE wydany=true");

        $smarty->assign('instrumenty_wydane',$wpisy);

        $error = 0;

        $_GET['page'] = 'rezerwacje';

        $smarty->display('index.tpl');

    }

    else {

    $error = 2;

    }

}

else {
 
    $error = 3;

}


//if ($error == 1) {

//   print("<p>Niepoprawne zapytanie - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

//}
if ($error == 2) {

print("<p>Nie masz wystarczających uprawnień do przeglądania tej strony - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

}
else if ($error == 3) {

print("<p>Użytkownik niezalogowany - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

}

?>