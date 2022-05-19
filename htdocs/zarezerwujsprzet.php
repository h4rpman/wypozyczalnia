<?php

include("config.php");

if (!empty($_SESSION)) {

     if (isset($_SESSION['nick']) && isset($_SESSION['haslo'])) {
 
 
         if (in_array(3,$_SESSION['grupy'])) {
 
             $wystepuje = true;
             $error = 0;
 
         }
 
     }
 
     if (isset($wystepuje) && $wystepuje == true) {

          if(!empty($_POST)) {

          $rezerwuj = $_POST['rezerwuj'];

          foreach ($rezerwuj as $id) {
          $zajety_od = $_POST['zajety_od'][$id];
          $zajety_do = $_POST['zajety_do'][$id];

          $zapytanie = "UPDATE `wyp_instrumenty` SET `dostepny`=FALSE, zajety_od='$zajety_od', zajety_do='$zajety_do' WHERE `id`=".$id;
          mysqli_query($connection, $zapytanie);

          }

          $smarty->assign('wynik','Zarezerwowano pomyślnie');

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
