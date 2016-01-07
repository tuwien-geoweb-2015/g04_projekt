<html> 
 <head> 
  <title>PHP-Beispiel Formular</title> 
 </head> 
 <body> 
   <h2>PHP-Beispiel 5: Formulareingabe anzeigen</h2> 

   <p>Lieber  
   <?php  
     if ( trim($_POST['name']) != "" )  // Namensfeld ist nicht leer 
        { echo $_POST['name']; } 
     else 
        { echo "Anonymous"; } 
   ?> !</p><br /> 
    
   <p>Du bist <?php echo $_POST['genauigkeit'].' '.$_POST['alter'];  
      ?> Jahre alt.</p> 
     
   <?php if (is_numeric($_POST['alter']))  
       {echo '<p>Dein Geburtsjahr ist '. 
           (date("Y")-$_POST['alter']).'.</p>';} 
       else 
       {echo 'Dein Alter habe ich nicht verstanden - gibt eine Zahl an!';}  
   ?> 
   
   <p>Du wohnst in der <?php echo $_POST['spezifisch'].' '.$_POST['wohnort'];  
      ?>.</p>

 </body> 
</html>  