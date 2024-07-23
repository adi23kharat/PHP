<?php 
extract($_POST);
function calculation($n1,$n2,$ch)
{
if($ch==1)
{
$c = $n1 + $n2; 
echo"addition is: $c";
}
 
else 
if($ch==2)
{
$c = $n1 - $n2; 
echo"subtraction is: $c";
}
else if($ch==3)
{
$c = $n1 * $n2; 
echo"multiplication is: $c";
}
else if($ch==4)
{
$c = $n1 / $n2; 
echo"Division is: $c";
}
}
calculation($n1, $n2, $ch);
?>
