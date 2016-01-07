<html> 
 <head> 
  <title>PHP-Beispiel</title> 
 </head> 
 <body> 
   <h2>PHP-Beispiel 4: Angaben zum Html-File - Gruppe 4</h2> 
    
   <?php  
       //Kommentar: $_Server ist assoziatives Array,  
       //Indizes sind in eckige Klammern zu setzen  
       $abspfad = dirname(__FILE__); 
       $pfad = $_SERVER["PHP_SELF"]; 
       $dir = dirname($_SERVER["PHP_SELF"]); 
       $dateiname = basename($_SERVER["PHP_SELF"]); 
        
       echo "<p>Absolut-Pfad:  ".$abspfad."</p>"; 
       echo "<p>Web-Pfad:  ".$dir."</p>";  
       echo "<p>Datei-Name:  ".$dateiname."</p>";  
       echo "<p>Dokument-Pfad:  ".$pfad."</p><br />"; 
        
       // Bei Funktionen sind Parameter in runde Klammern zu setzen 
       echo "<p><i><font color=\"red\"> Uhrzeit: ".date("H:i:s")." Uhr </font></i></p>"; 
   ?> 

 </body> 
</html>  