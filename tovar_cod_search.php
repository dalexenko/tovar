<?

include ("config.php");

$cod5_chap = explode ('.', $_GET["cod5"]);

echo "<form name=\"tovar_cod_search.php\" action=\"\" method=\"post\">
<input name=\"srch_text\" type=\"text\" value=\"\">
<input type=\"submit\" value=\"Send\">
</form>\n";

if ($_POST["srch_text"]){

$result = mysql_query("select * from class_tovar where name like '%".$_POST["srch_text"]."%'");

if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
// Use the result, assuming we're done with it afterwards

echo "<table border=1>";
while ($row = mysql_fetch_assoc($result))
{
    echo "<tr><td><a href='tovar_cod.php?cod=".$row['kod']."'>".$row['kod']."</a></td>";
    echo "<td>".$row['name']."</td></tr>";
}
echo "</table>";
// Now we free up the result and continue on with our script

mysql_free_result($result);

mysql_close($link);

}

?>