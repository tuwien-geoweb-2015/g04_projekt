<html>
 <head>
 </head>
  <body>
  
   <h2>Php-Beispiel 3</h2>
   <p> Zahlen (1-21), die durch 3 teilbar sind werden rot dargestellt</p>

   <?php 
   
    // Variablen für Schleifendurchlauf
    $i = 1;        // Zähler
    $iMax = 22;    // Maximalzahl
    
    // Schleife mit WHILE (Durchlauf bis Bedingung falsch)
    WHILE ( $i < $iMax ) 
        {
        if ( $i % 3 == 0 )  // % ist Modulo-Operator
            { echo "<strong> ==> " . "<font color=\"red\"> $i </font>" . "</strong><br />"; }
        else
            { echo $i . "<br />"; }
            
         $i = $i + 1;   // Zähler erhöhen
        }
  
   ?>   

 </body>
</html>  