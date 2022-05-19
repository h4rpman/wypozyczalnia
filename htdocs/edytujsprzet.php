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
                
        

        if(!empty($_POST) && empty($_POST['edycja'])) {

            $id = $_POST['id'];

            $wpis = mysqli_query($connection, "SELECT * FROM wyp_instrumenty WHERE id=".$id);
        
            
            $smarty->assign('instrument',$wpis);
            $smarty->assign('edytowany',"instrument");
            
                $_GET['page'] = 'edycja';
            
                $smarty->display('index.tpl');
            
            }

        else if(!empty($_POST )&& !empty($_POST['edycja'])) {

            $id = $_POST['id'];
            $img = $_POST['img'];
            $nazwa = $_POST['nazwa'];
            $typ = $_POST['typ'];
            $producent = $_POST['producent'];
            $rok_produkcji = $_POST['rok_produkcji'];
            $numer_seryjny = $_POST['numer_seryjny'];
            $model = $_POST['model'];
            $opis = $_POST['opis'];

            $zapytanie = "UPDATE `wyp_instrumenty` SET img = '$img' , nazwa = '$nazwa' , typ = '$typ' , producent = '$producent' , rok_produkcji = '$rok_produkcji' , numer_seryjny = '$numer_seryjny', model = '$model' , opis = '$opis' WHERE id=".$id;
            mysqli_query($connection, $zapytanie);

            $smarty->assign('wynik','Zwrócono pomyślnie');

            $_GET['page'] = 'home';

            $smarty->display('index.tpl');
        }

        else {

            $zapytanie = "SELECT COUNT(*) FROM wyp_instrumenty";

            include("paginacja.php"); // <-- $zapytanie

            $wpisy = mysqli_query($connection, "SELECT * FROM wyp_instrumenty LIMIT ".$DB_QUERY_LIMIT." OFFSET ".$DB_QUERY_OFFSET);

            $smarty->assign('instrumenty',$wpisy);

            $_GET['page'] = 'edytujsprzet';

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