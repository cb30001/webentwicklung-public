<?php
echo view('templates/head_header');
$fehler = "Satze mit X Login war wohl nix (Bitte alle Felder eintragen)";
echo '<div>'.$fehler.'</div>';
echo view('templates/body_footer');