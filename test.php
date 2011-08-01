<?php

$str = "hEllo WoRld!";

function capitalize ( &$str, $each=true )
{
   $str = strtolower($str);
   if ( $each === true )
   {
      $str = ucwords( $str );
   }
   else
   {
      $str = strtoupper( $str );
   }
   echo( "$str <br>" );
}

capitalize( $str );
capitalize( $str, FALSE );

echo $str;

?>