<p></p>
<h2 style="color: #585858; font-size: 20px; font-family: Calibri">Php-SQLite-Beispiel 3 - Gruppe 4</h2>

<p style="color: #7D7D7D; font-size: 14px; font-family: Calibri">
<?php

// SQLite3-Datenbank oeffnen (die php-datei liefert Datenbank-Objekt $db)
include 'geoweb_db_open.php';

// Abfrage festlegen, Bundesland-Tabelle lnd_oes (land-id, land)
$sql = 'SELECT * FROM bez_oes';

// Abfrage durchfuehren, query-Methode liefert Ergebnis-Objekt (Recordset)
$result = $db->query($sql) or 
			die ('Fehler bei Abfrage: '.$db->lastErrorMsg());

// Erste Zeile des Abfrageergebnisses lesen
$zeile = $result->fetchArray(); 

// Ergebnis (Zeile in assoziativem Array) verarbeiten
echo 'Abfrage: ' . $sql . '<br />';
echo '1. Zeile: ' . $zeile["land_id"] .
     " " . $zeile["bezirk"] . "<br /><br />";
     
echo "<span style=\"color:#6698BE;\"> Super! Die Abfrage wurde auf Bezirke ge&aumlndert.</span>";

// Datenbank schliessen
include 'geoweb_db_close.php';

?> </p>