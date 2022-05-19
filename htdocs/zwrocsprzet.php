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

        $zwroc = $_POST['zwroc'];

        print_r($zwroc);

        foreach ($zwroc as $id) {
            $zapytanie = "UPDATE `wyp_instrumenty` SET `wydany`=FALSE, `dostepny`=TRUE, zajety_od=NULL, zajety_do=NULL WHERE `id`=".$id;
            mysqli_query($connection, $zapytanie);
        }

        $smarty->assign('wynik','Zwrócono pomyślnie');

            $_GET['page'] = 'home';

            $smarty->display('index.tpl');
        }
        else {

            $error = 1;

        }
    
    }

    else {

        $error = 2;

    }

}    
else {
     
    $error = 3;

}


if ($error == 1) {
    
    print("<p>Niepoprawne zapytanie - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");
    
}
else if ($error == 2) {

    print("<p>Nie masz wystarczających uprawnień do przeglądania tej strony - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

}
else if ($error == 3) {

    print("<p>Użytkownik niezalogowany - przejdź do <a href=\"index.php?page=home\">Strony Głównej</a></p>");

}

?>