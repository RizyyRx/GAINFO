<pre>
<?
include "libs/load.php";

Database::getConnection();
print_r($_SERVER);
print($_SERVER['DOCUMENT_ROOT'] .'/gainfo/css/' . basename($_SERVER['PHP_SELF'], ".php") . ".css");


?>
</pre>