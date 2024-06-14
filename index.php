<?php
include "libs/load.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?load_template("_head");?>
  <body style="display: flex; flex-direction: column; min-height: 100vh;">
  <?load_template("_DarkLightMode");?>

<main>
  <?load_template("_header");?>
<?if(isset($_POST['query'])&& !empty($_POST['query'])){
  
  load_template("_searchResult");
}
else{
  load_template("_main");
}

?>

</main>
<?load_template("_footer");?> 
<script src="/gainfo/assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>
</html>
