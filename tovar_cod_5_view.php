<?

include ("config.php");

//$cod5_chap = explode ('.', $_GET["cod5"]);

$cod5_chap = $_GET["cod5"];

// $result = mysql_query("select * from class_tovar where kod like '".$cod5_chap[0].".%'");

$result = mysql_query("select * from class_tovar where kod like '".$cod5_chap."%'");


// $result = mysql_query("select * from class_tovar where kod like '__.__._'");

if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
/* Use the result, assuming we're done with it afterwards */

echo "<table border=1>";
while ($row = mysql_fetch_assoc($result))
{
    echo "<tr><td><a href='tovar_cod_5_view.php?cod5=".$row['kod']."'>".$row['kod']."</a></td>";
    echo "<td>".$row['name']."</td></tr>";
}
echo "</table>";
/* Now we free up the result and continue on with our script */
mysql_free_result($result);

mysql_close($link);
?>