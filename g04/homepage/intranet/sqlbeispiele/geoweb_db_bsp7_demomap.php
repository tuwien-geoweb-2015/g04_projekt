<!DOCTYPE html>
<html><head>
  <meta http-equiv="content-type" content="text/html"; charset="ISO-8859-1">
  <title>Geoweb - DemoMap</title>
  <link rel="stylesheet" href="map_ol/ol.css">
  <style type="text/css">html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  }
  div.full {
  width: 100%;
  height: 100%;
  }</style>
</head>
 
<body>
  <h2 style="color: #585858; font-size: 20px; font-family: Calibri">PHP - SQLite - Demomap</h2>

<?php
  // Parameter (Name der gewählten Karte) übernehmen
  if (isset($_POST['MapLst'])) 
     {$mapsel=$_POST['MapLst'];} 
  else 
     {$mapsel='';}
?>

<form method="post" action="geoweb_db_bsp7_demomap.php" target="_self"> 
 <table >
  <tr><td><p style="color: #7D7D7D; font-size: 14px; font-family: Calibri">Karten (Demomaps)</p></td></tr>
  <tr><td>
     <select name="MapLst" size="4">

     <?php
       // Datenbank öffnen (liefert $db und $dbname)
       include_once 'geoweb_db_open.php';
       // Liste der Karten bestimmen
       $result = $db->query ("SELECT map_name,map_text FROM demomap") 
       		or die ('Fehler Map-Liste: '.$db->lastErrorMsg());
       // Verfügbare Kartennamen in Auswahlliste anzeigen
       while ($row = $result->fetchArray()) 
         { if ($row["map_name"]==$mapsel)
            {echo '<option selected="selected" value="' . $row["map_name"]. '">' . 
                  $row["map_name"] . ' - ' . $row["map_text"] . '</option>';} 
           else 
            {echo '<option value="' . $row["map_name"]. '">' . $row["map_name"] . 
                  ' - ' . $row["map_text"] .'</option>';}
         }
     ?> 
     </select>
   </td></tr>
  <tr><td><input type="submit" value="Karte anzeigen"/></td></tr>
 </table>

</form>

<?php
    // URL der gewählten Karte bestimmen (falls Karte gewählt wurde)
    if ($mapsel!='')
      {
       $result = $db->query("SELECT * FROM demomap WHERE map_name='".$mapsel."';") or 
                   die ('Fehler Map-Liste: '.$db->lastErrorMsg());
       $row = $result->fetchArray();
       $url = "'" . $row["map_url"] . "'";
       echo "<p>". $row["map_source"] . " - " . $row["map_name"] . " - " . 
            $row["map_text"] . "<br />URL: " . $url . "</p>";
      }
    else
      {
      $url = "'http://data.wien.gv.at/daten/geo/wfs?service=WFS&request=GetFeature&version=1.1.0&typeName=ogdwien:BEZIRKSGRENZEOGD&srsName=EPSG:4326&outputFormat=json'";
      echo "<p>Datenquelle: Stadt Wien - data.wien.gv.at</p>";
      }
?>
<p style="color: #7D7D7D; font-size: 14px; font-family: Calibri">F&uumlr die Kartendarstellung ist Mozilla Firefox oder Internet Explorer 10.x erforderlich.</p>
<!-- Gewählte Karte anzeigen -->  
<div id="map" class="full"></div>
    
<script src="map_ol/ol.js"></script><script type="text/javascript">
var map = new ol.Map({
  target: 'map',
  view: new ol.View({
    center: ol.proj.transform([16.37, 48.21], 'EPSG:4326', 'EPSG:3857'),
    zoom: 11
  }),
  layers: [new ol.layer.Vector({
    source: new ol.source.GeoJSON({
      projection: 'EPSG:3857',
      url: <?php echo $url;?>,
    })
  })]
  
});</script><iframe src="" style="display: none;"></iframe>

</body>
</html>
