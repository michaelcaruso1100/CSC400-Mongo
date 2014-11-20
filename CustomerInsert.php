<?PHP
include 'MongoClassFile.php';
//Logic Built into this Page... Once Query1 is set.
$Query1 = $_POST['Query1'];
echo $Query1;
MongoInsert($Query1);
?>