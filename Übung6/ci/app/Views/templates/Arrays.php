<!--Gruppe 6-->
<?php
/*
 * In dieser Datei werden alle Arrays abgelegt (was performance technisch gesehen vielleicht nicht so toll ist, da immer alle Arrays included werden,
 * aber bei so wenigen Arrays ist das nicht wichtig). Wenn du noch vorschläge hast, dann kannst du sie hier einfügen.
 * Was die bei Aufgabe 2b meinen weiß ich gerade nicht.
 * */

$Sidebar = array(
    "Login", "Projekte", "Aktuelles Projekt", "Reiter", "Aufgaben", "Mitglieder"
);

$Mitarbeiter = array(
    "Max Mustermann",
    "Petra Müller"
);
$Aufgaben = array(
    "HTML Datei erstellen",
    "CSS Datei erstellen",
    "PC eingeschaltet",
    "Kaffee trinken",
    "Für die Uni lernen"
);
//Mehrdimensionaler Array. Anfrage wie unten, bsp. Reiter[0][0] -> gibt ToDo aus.
$Reiter = array(
    array("ToDo", "Dinge die erledigt werden müssen"),
    array("Erledigt", "Dinge die erledigt sind"),
    array("Verschoben", "Dinge die später erledigt werden")
);
/* Überprüft, ob die Arrays leer sind bevor der neue Array ToDo erzeugt wird */
if (!(empty($Reiter)&&empty($Aufgaben)&&empty($Mitarbeiter))){
    /* Hier werden mehrere Strings aus den vorheringen Arrays mit "." zusammengesetzt */
    $ToDo = array(
        array(
            $Reiter[0][0], $Aufgaben[0]." (".$Mitarbeiter[0].")", $Aufgaben[1]." (".$Mitarbeiter[0].")"
        ),
        array(
            $Reiter[1][0], $Aufgaben[2]." (".$Mitarbeiter[1].")", $Aufgaben[3]." (".$Mitarbeiter[1].")"
        ),
        array(
            $Reiter[2][0], $Aufgaben[4]." (".$Mitarbeiter[0].")"
        )
    );
}
?>
