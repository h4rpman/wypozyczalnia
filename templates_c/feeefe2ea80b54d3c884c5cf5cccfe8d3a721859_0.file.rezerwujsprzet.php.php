<?php
/* Smarty version 4.1.0, created on 2022-05-05 11:53:08
  from 'D:\wamp64\www\wypozyczalnia\htdocs\rezerwujsprzet.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6273baa4956146_79924827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feeefe2ea80b54d3c884c5cf5cccfe8d3a721859' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\htdocs\\rezerwujsprzet.php',
      1 => 1651748236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273baa4956146_79924827 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
        

$user = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM as_uzytkownicy WHERE `nick`='$nick' AND `haslo`='$haslo' LIMIT 1"));
        $wpisy = mysqli_query($connection, "SELECT * FROM as_bakterie");
    
    <form method="POST" action="index.php?page=usun" onsubmit="return confirm('Czy na pewno chcesz usunąc wybrane rekordy?');">

        <?php echo '<?php'; ?>


            echo "
            <table bgcolor=\"white\" cellpadding=\"4\" border=\"1px solid black\">
            ";

            while($row = mysqli_fetch_array($wpisy)) {

                print("<tr>");
                print("<td><input type=\"checkbox\" name=\"usun[]\" value=\"".$row['id']."\"><br></td>");
                print("<td>".$row['id']."</td>");
                print("<td><img src=".$row['img']." height=\"40%\" width=\"40%\" ></td>");
                print("<td>".$row['nazwa']."</td>");
                print("<td>".$row['rodzina']."</td>");
                print("<td>".$row['morfologia']."</td>");
                print("<td>".$row['sciana_komorki']."</td>");
                print("<td>".$row['dlugosc_komorki']."</td>");
                print("<td>".$row['metabolizm']."</td>");
                print("<td>".$row['wystepowanie']."</td>");
                print("</tr>");

            }

            echo "</table>";

<?php echo '?>';
}
}
