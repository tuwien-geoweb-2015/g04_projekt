<html>
 <head>
 </head>
  <body>
  
   <h2>Php-Beispiel 2</h2>

   <?php 
    // Variablen mit einem Wert (Varaiablennamen beginnen immer mit $)
    $Grp_Text = "Gruppe";    // Variable mit Text (String)
    $Grp_Zahl = 3;           // Variable mit Zahl
    
    // Texte können mit Verknüpfungsoperator (.) zusammengefügt werden
    echo "<p>Ich bin ein Mitglied der Gruppe " . $Grp_Text . " " . $Grp_Zahl . "</p>"; 

    // Arrays speichern mehrere Werte in einer Variable 
    $Gruppennummer = array(1,2,3);
    $namen = array("Dominik Linder","Lisa Reinhart","Matthaeus     Marte");
    
    // Zugriff auf Elemente des Arrays mit numerischen Index (beginnend bei 0)
    echo "<p>Mitgliedsnummer der Gruppe: ".$Gruppennummer[0]."     </p>"; 
    
    echo " Name: <strong> ".$namen[0]."</strong>"; 
   

    // Assoziative Arrays mit Schlüssel (String) als Index
    $ECTS = array("Dominik"=>180, "Lisa"=>210, "Matthaeus"=>203);
    echo "<p>ECTS von Dominik: ".$ECTS["Dominik"]."</p>"; 
    
   ?>   

 </body>
</html>  