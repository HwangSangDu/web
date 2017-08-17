<html>
<body>
<?php
mysql_connect('localhost', 'egoing', '111111');
mysql_select_db('advanced_php');
$sql = "SELECT * FROM SQL_Injection WHERE type='".$_GET['type']."'";
//$sql = "SELECT * FROM SQL_Injection WHERE type='".mysql_real_escape_string($_GET['type'])."'";
echo "SQL : $sql";
?>
    <ul>
<?php
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
    echo "<li>{$row['description']}</li>";
}
?>
    </ul>
</body>
</html>