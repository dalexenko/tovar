<?

header("Content-Type: text/html; charset=UTF8");

$link = mysql_connect('192.168.1.10:3306', 'damien', 'hen.pth');

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
else
{
$db_selected = mysql_select_db('kod_tovar', $link);
}

mysql_query("SET NAMES 'UTF8'");

?>