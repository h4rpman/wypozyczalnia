<?php

include("config.php");

if (!empty($_SESSION)) {

    if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {


        if (in_array(1,$_SESSION['grupy'])) {

            $wystepuje = true;
            $error = 0;

        }

    }

    if (isset($wystepuje) && $wystepuje == true) {

        if(!empty($_POST)) {

            $usun = $_POST['usun'];
            
            foreach ($usun as $id) {
            
            $zapytanie = "DELETE FROM `wyp_uzytkownicy` WHERE id=".$id;
            mysqli_query($connection, $zapytanie);

            $zapytanie = "DELETE FROM `wyp_przynaleznosc` WHERE id_uzytkownika=".$id;
            mysqli_query($connection, $zapytanie);
            
            }
            
            $smarty->assign('wynik','Usunięto pomyślnie');
            
                $_GET['page'] = 'home';
            
                $smarty->display('index.tpl');
            
            }

        else {

            $zapytanie = "SELECT COUNT(*) FROM wyp_uzytkownicy";

            include("paginacja.php"); // <-- $zapytanie

        $wpisy = mysqli_query($connection, "SELECT * FROM wyp_uzytkownicy LIMIT ".$DB_QUERY_LIMIT." OFFSET ".$DB_QUERY_OFFSET);

        $smarty->assign('uzytkownicy',$wpisy);

        $_SESSION['pagenumber'] = $page;

        $_GET['page'] = 'usunuzytkownika';

        $smarty->display('index.tpl');

        $error = 0;

        }

    }
    else {

        $error = 2;

    }

}

else {
 
    $error = 3;

}


if ($error == 2) {

print("<p>Nie masz wystarczających uprawnień do przeglądania tej strony - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

}
else if ($error == 3) {

print("<p>Użytkownik niezalogowany - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

}

?>