<?php
include 'templates/head_header.php';
echo '<title>Mitglieder</title>';
include 'templates/body_header.php';
echo '<div>';

//foreach ($Mitglieder as $value){
//    echo $value;
//}
echo $Mitglieder[0];
echo $Mitglieder[1];
echo '</div>';

include 'templates/body_footer.php';


?>