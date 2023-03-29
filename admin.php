<?
require "./include/session.php";
if(!is_admin())
{
header('Location: 404.html');
exit();
}

?>