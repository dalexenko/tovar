<?

include ("config.php");

$result = mysql_query("select * from class_tovar where kod like '__.__._'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
/* Use the result, assuming we're done with it afterwards */

echo "<table border=1>";
while ($row = mysql_fetch_assoc($result))
{
    echo "<tr><td><a href='tovar_cod.php?cod=".$row['kod']."'>".$row['kod']."</a></td>";
    echo "<td>".$row['name']."</td></tr>";
}
echo "</table>";
/* Now we free up the result and continue on with our script */
mysql_free_result($result);

mysql_close($link);
?>