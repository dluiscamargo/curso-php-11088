<?php

/**
 * Test if a given year is a leap year
 * $nYear - the given year
 */
function isLeapYear( $nYear ){
   // ocorrendo a cada quatro anos
   // (exceto anos múltiplos de 100 que
   // não são múltiplos de 400).
   if ( ( $nYear % 4 !== 0 ) || ( $nYear % 100 === 0 ) && ( $nYear % 400 !== 0 ) ){
      return false;
   }
   else{
      return true;
   }
} // function isLeapYear( $nYear ){



 ?>
