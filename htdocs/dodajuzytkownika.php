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
            
            $nick = $_POST['nick'];
            $haslo = md5($_POST['haslo']);
            $email = $_POST['nick'];
            $grupy = $_POST['grupy'];

            print("Grupy:");
            print_r($grupy);

            $zapytanie = "INSERT INTO `wyp_uzytkownicy` VALUES (DEFAULT,'$nick','$email','$haslo')";
            mysqli_query($connection, $zapytanie);

            $id = mysqli_insert_id($connection);

            print("id:");
            print_r($id);

            foreach ($grupy as $grupa) {

                print("Grupa:");
                print_r($grupa);
                $zapytanie = "INSERT INTO wyp_przynaleznosc VALUES(DEFAULT,'$id','$grupa')";
                mysqli_query($connection, $zapytanie);
                
            }

            $smarty->assign('wynik','Dodano użytkownika');

            $_GET['page'] = 'dodajuzytkownika';

            $smarty->display('index.tpl');

            $error = 0;
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