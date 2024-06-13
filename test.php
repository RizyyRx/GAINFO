<pre>
<?
include "libs/load.php";

Database::getConnection();
print_r($_SERVER);
print($_SERVER['DOCUMENT_ROOT']."/gainfo/_templates/.php");


?>
</pre>