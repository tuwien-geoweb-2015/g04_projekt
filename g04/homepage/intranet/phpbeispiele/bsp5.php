<html> 
 <head> 
  <title>PHP-Beispiel Formular</title> 
 </head> 
 <body> 
   <h2>PHP-Beispiel 5: Einfaches Html-Formular - Gruppe 4</h2> 
    
        <form action="php_bsp5_response.php" method="post" target="_self"> 
            Dein Name:  <input type="text" name="name" /> <br /><br /><br /> 
            Dein Alter: <input type="text" name="alter" />&nbsp;  
                       <select name="genauigkeit" size="1"> 
                           <option value="genau"> genau </option> 
                           <option value="circa"> circa </option> 
                           <option value="umgewandelt"> umgewandelt </option> 
                       </select> <br /><br /><br /> 
            Dein Wohnort: <input type="text" name="wohnort" />&nbsp;  
                       <select name="spezifisch" size="1"> 
                           <option value="Stadt"> Stadt </option> 
                           <option value="Marktgemeinde"> Marktgemeinde </option> 
                           <option value="Gemeinde"> Gemeinde </option> 
                       </select> <br /><br /><br /> 
            <input type="submit" value="Absenden"/> 
        </form> 

 </body> 
</html>  