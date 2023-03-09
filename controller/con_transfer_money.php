<?php
include "../html.php";
?>

<?php

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  // echo $cs_id;
  $obj_name = new Course();
  $rs2 = $obj_name->getCourseDetail($cs_id)
  // echo $rs2['cs_id']
  ?>


<?php
include "cons_transfer_money.php";
?>

