<?

$sql['host'] = ""; //Mysql host
$sql['user'] = ""; //Mysql user
$sql['pass'] = ""; //Mysql password
$sql['base'] = ""; //Mysql database

mysql_connect($sql['host'], $sql['user'], $sql['pass']);
mysql_select_db($sql['base']);

?>