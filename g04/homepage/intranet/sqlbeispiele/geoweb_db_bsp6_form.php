<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
  <title>PHP-SQLite-Beispiel 6</title>
  <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="geoweb_styles.css" />
</head>

<body>
<div class="wrapper">
  <div class="header">
     <div id="navigation">
      <h2 style="color: #585858; font-size: 20px; font-family: Calibri">Php-SQLite-Beispiel 6: Formular f&uumlr Sql-Abfrage</h2>
     </div>
  </div>
 
<div class="content">
<p style="color: #7D7D7D; font-size: 14px; font-family: Calibri">
<?php
  // Datenbank öffnen (liefert $db und $dbname)
  include_once 'geoweb_db_open.php';
  // Tabellenfunktion (einmalig) einbinden
  include_once 'geoweb_db_table_function.php';
  echo '<h2 style="color: #7D7D7D; font-size: 14px; font-family: Calibri">Datenbank: ' . $dbname . '</h2>';

  // Parameter übernehmen
  if (isset($_POST['TabLst'])) 
     {$tabsel=$_POST['TabLst'];} 
  else 
     {$tabsel='';}
  if (isset($_POST['SqlTxt'])) 
     {$sql=$_POST['SqlTxt'];
      $sql = stripslashes($sql); // entfernt Quotes \
     } 
  else 
     {$sql='';}
?>

<form method="post" action="geoweb_db_bsp6_form.php" target="_self"> 
 <table >
  <tr><td>Tabellen</td><td>Felder</td></tr>
  <tr>
    <td>
     <select name="TabLst" size="5">
     <?php
       // Liste der Tabellen bestimmen
       $tablist = $db->query ("SELECT name FROM sqlite_master ".
       		"WHERE type IN ('table','view') AND name NOT LIKE 'sqlite_%'") 
       		or die ('Fehler Tab-Liste: '.$db->lastErrorMsg());
       // Liste der Tabellen anzeigen
       while ($tab = $tablist->fetchArray()) 
         { if ($tab[0]==$tabsel)
            {echo '<option selected="selected">' . $tab[0] . '</option>';} 
           else 
            {echo '<option>' . $tab[0]. '</option>';}
         }
     ?> 
     </select>
   </td>
   <td>
     <select name="FldLst" size="5">
     <?php
       // Feldliste bestimmen und anzeigen (falls Tabelle gewählt wurde)
       if ($tabsel!='')
         {
          $fldlist = $db->query("SELECT * FROM ".$tabsel) or 
                     die ('Fehler Fld-Liste: '.$db->lastErrorMsg());
      	  for ($i=0; $i<$fldlist->numColumns(); $i++)
            { echo '<option>' . $fldlist->ColumnName($i) . '</option>';}
          $sql = 'SELECT * FROM ' . $tabsel;
         }
     ?> 
     </select>
   </td>
  </tr>
  <tr><td><input type="submit" value="Felder anzeigen"/></td></tr>
 </table>

</form>

<p style="color: #7D7D7D; font-size: 14px; font-family: Calibri"> Vollst&aumlndigen Select-Befehl eingeben: </p>

<form method="post" action="geoweb_db_bsp6_form.php" target="_self">
  <textarea name="SqlTxt" rows="5" cols="80"><?php echo $sql;?></textarea><br />
  <input type="submit" value="Abfrage starten"/>
</form>

<?php

if ($sql!='')
  {
   // Abfrage durchführen
   $result = $db->query($sql) or 
               die ('Fehler bei Abfrage: '.$db->lastErrorMsg());
   
   // Abfrageergebnis als Tabelle ausgeben
   echo '<p>Abfrage-Ergebnis:</p>';
   
   @geoweb_db_table($result);
  }

// Datenbank schließen
include 'geoweb_db_close.php';
?>
</p>
</div>
</div>
</body>
</html> 
