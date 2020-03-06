<?php


function fact($n)
{
   if(!$n)
   {
      return("Факториал числа $n не существует");
   }
   else
   {
       $res = 1;
       for($i=1; $i <= $n; $i++)
       {
           $res *= $i;
       }
       return $res;
   }

}

echo fact(5);

?> 