<?

include ("config.php");

$result = mysql_query("SELECT * FROM sections_tovar");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
/* Use the result, assuming we're done with it afterwards */

echo "<table border=1>";
while ($row = mysql_fetch_assoc($result))
{
    echo "<tr><td>".$row['sections_kod']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['chapters']."</td></tr>";
}
echo "</table>";
/* Now we free up the result and continue on with our script */
mysql_free_result($result);

mysql_close($link);
?>