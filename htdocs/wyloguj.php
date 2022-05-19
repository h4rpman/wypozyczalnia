<?php 

    include('config.php');

            session_destroy();
            session_unset();
            session_write_close();
            setcookie(session_name(),'',0,'/');            
            

            $smarty->assign('isLogged',false);

            header("Refresh:0; URL=index.php");

?>