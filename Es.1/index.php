<!DOCTYPE html>
<html>
<head>
    <title>
        Esercizio 1
    </title>

    <h1>
        <b>
            I numeri divisibili per 3 tra 0 e 100 sono:
        </b>
    </h1>
    

</head>

<body>

    <?php

        for ($a=0; $a < 3; $a++) { 
            echo "<br>";
        }

    ?>

    <table border="2">  

    <?php
        for ($i=0; $i < 101 ; $i++) { 
            
            if ($i%3 == 0){
  
                echo "<td>  $i  </td>";
                
            }

        }   
    ?>
    
    </table>

</body>
</html>