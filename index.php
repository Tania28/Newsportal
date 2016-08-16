<?php
session_start();
require 'classes/application.php';
$app_obj=new Application();
?>
<?php
include "includes/header.php";
?>
<section>
<?php 
 if(isset($pages)) {
 if($pages=="category_content")
 {
     include "pages/category_content.php";
 }
 else if($pages=="description_content")
 {
     include "pages/description_content.php";
 }
 }
 else {
include 'pages/home_content.php';
  }

?>
</section>
<?php
include "includes/footer.php";
include "includes/fixed-footer.php"
?>
