<!DOCTYPE html>
<html>
  <head>
  	<title>Practice 6</title>
  </head>
  <body>

  <?php
    
      $month = date('F',time());
      if($month == "December"){
         echo "It's December, here comes the snow.";
      }
      else{
         echo "It’s not December so you can keep the heating off.";
      }
      echo "<br><br><br>";
    ?>


    <?php
    
        $i =  0 ;
        while ($i <= 7 ) {
          echo "abc&nbsp";
          $i++;
        }
    ?>

     <?php
    
        echo"<br><br><br><br>";
        $u =  0 ;
        do{
          echo "xyz&nbsp";
          $u++;
        }
        while ($u <= 9 );
    ?>

      <?php
    
        echo"<br><br><br>";
        for ($num = 1 ; $num < 10 ; $num++){
          echo $num;
        }
    ?>
     
       <?php
    
        echo"<br><br><br>";
        
        for ($string = "A" ; $string < "G" ; $string++){
         echo "<li>Iteam $string </li>\n";
        }
          echo "</ol>";
    ?>
     





     

  </body>
 </html>