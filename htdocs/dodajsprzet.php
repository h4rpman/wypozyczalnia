<?php


if (!empty($_SESSION)) {

    if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {


        if (in_array(2,$_SESSION['grupy'])) {

            $wystepuje = true;
            $error = 0;

        }
    }

    if (isset($wystepuje) && $wystepuje == true) {

        include("config.php");

        if(!empty($_POST)) {

            $img = $_POST['img'];
            $nazwa = $_POST['nazwa'];
            $typ = $_POST['typ'];
            $producent = $_POST['producent'];
            $rok_produkcji = $_POST['rok_produkcji'];
            $numer_seryjny = $_POST['numer_seryjny'];
            $model = $_POST['model'];
            $opis = $_POST['opis'];


            $zapytanie = "INSERT INTO `wyp_instrumenty` VALUES(DEFAULT,'".$img."','".$nazwa."','".$typ."','".$producent."','".$rok_produkcji."','".$numer_seryjny."','".$model."','".$opis."',NULL,NULL,FALSE,TRUE)";

            mysqli_query($connection, $zapytanie);

            $smarty->assign('wynik','dodano pomyślnie');

            $_GET['page'] = 'dodajsprzet';

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