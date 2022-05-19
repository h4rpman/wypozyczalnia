<?php include("config.php");

if (!empty($_SESSION)) {

    if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {


        if (in_array(3,$_SESSION['grupy'])) {

            $wystepuje = true;
            $error = 0;

        }

    }

    if (isset($wystepuje) && $wystepuje == true) {

        $zapytanie = "SELECT COUNT(*) FROM wyp_instrumenty WHERE dostepny=TRUE AND zajety_od IS NULL AND zajety_do IS NULL";

        include("paginacja.php"); // <-- $zapytanie

        if(isset($_POST['term'])) {

            $wpisy = mysqli_query($connection, 
            "
            SELECT * FROM wyp_instrumenty
            WHERE (nazwa LIKE '%".$_POST['term']."%'
            OR  producent LIKE '%".$_POST['term']."%'
            OR  model LIKE '%".$_POST['term']."%'
            OR  numer_seryjny LIKE '%".$_POST['term']."%'
            OR  opis LIKE '%".$_POST['term']."%'
            OR  typ LIKE '%".$_POST['term']."%'
            OR  rok_produkcji LIKE '%".$_POST['term']."%')
            AND (dostepny=TRUE
            AND zajety_od IS NULL 
            AND zajety_do IS NULL)
            ");

            $smarty->assign('instrumenty_do_rezerwacji',$wpisy);
            $smarty->display('rezerwujsprzet_form.tpl');
        }
        else {
            
            $wpisy = mysqli_query($connection, "SELECT * FROM wyp_instrumenty WHERE dostepny=TRUE AND zajety_od IS NULL AND zajety_do IS NULL LIMIT ".$DB_QUERY_LIMIT." OFFSET ".$DB_QUERY_OFFSET);
            $smarty->assign('instrumenty_do_rezerwacji',$wpisy);

            $_SESSION['pagenumber'] = $page;
            $_GET['page'] = 'rezerwujsprzet';
            $smarty->display('index.tpl');
        }



      


        


        $error = 0;

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