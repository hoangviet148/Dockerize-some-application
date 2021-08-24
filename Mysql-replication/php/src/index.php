<html>
<?php
include "connect.php";
require_once "create.php";
require_once "read.php";
echo "<br>";
?>

<form method="POST">
    <input type="submit" class="create1" name="create1" value="Create">
    <input type="submit" class="create2" name="create2" value="Continously Create">
</form>

<?php
if (array_key_exists('create1', $_POST)) {
    createData($masterConn);
} else if(array_key_exists('create2', $_POST)) {
    for ($i = 0; $i < 10; $i++) {
        createData($masterConn);
        sleep(1);
    }
}
echo "<br><br> <b>Master Data:</b><br>";
getData($masterConn);
echo "<br><br> <b>Slave Data:</b><br>";
getData($slaveConn);
?>

</html>