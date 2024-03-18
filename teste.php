<?php

    function divide($dividend, $divisor) {
      if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {

        echo divide(0, 0);


      } catch(Exception $e) {

        echo "Unable to divide.";

      }
    
?>