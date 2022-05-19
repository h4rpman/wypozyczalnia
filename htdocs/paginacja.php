<?php

if(empty($_GET['pagenumber']))
        {
            $page=1;
        }
        else if($_GET['pagenumber'] <= 0 )
        {
            $page=1;
        }
        else {
            $page = $_GET['pagenumber'];
        }

        if(!isset($DB_PAGE_OFFSET))
        {
            $DB_QUERY_OFFSET = 0;
        }
  
        $DB_QUERY_OFFSET = $DB_QUERY_LIMIT*($page-1);

        $ilosc_wpisow = mysqli_fetch_array(
            mysqli_query($connection, 
            $zapytanie));
        

    //DEBUG    print("ilosc: ".$ilosc_wpisow[0]." offset ".$DB_QUERY_OFFSET." limit ".$DB_QUERY_LIMIT);

        if($ilosc_wpisow[0] > ($DB_QUERY_OFFSET + $DB_QUERY_LIMIT)) {

            $smarty->assign('wyswietlaj_nastepny',TRUE);
        
        }
        
        else {

            $smarty->assign('wyswietlaj_nastepny',FALSE); 
        
        }

?>