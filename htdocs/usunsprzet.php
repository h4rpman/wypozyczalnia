<?php

include("config.php");

if (!empty($_SESSION)) {

    if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {


        if (in_array(2,$_SESSION['grupy'])) {

            $wystepuje = true;
            $error = 0;

        }

    }

    if (isset($wystepuje) && $wystepuje == true) {

        if(!empty($_POST)) {

            $usun = $_POST['usun'];
            
            foreach ($usun as $id) {
            
            $zapytanie = "DELETE FROM `wyp_instrumenty` WHERE id=".$id;
            mysqli_query($connection, $zapytanie);
            
            }
            
            $smarty->assign('wynik','Usunięto pomyślnie');
            
                $_GET['page'] = 'home';
            
                $smarty->display('index.tpl');
            
            }

        else {

        
        $zapytanie = "SELECT COUNT(*) FROM wyp_instrumenty";

        include("paginacja.php"); // <-- $zapytanie

        $wpisy = mysqli_query($connection, "SELECT * FROM wyp_instrumenty LIMIT ".$DB_QUERY_LIMIT." OFFSET ".$DB_QUERY_OFFSET);
        $smarty->assign('instrumenty',$wpisy);

        $_GET['page'] = 'usunsprzet';

        $_SESSION['pagenumber'] = $page;

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