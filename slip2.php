<?php
extract($_POST);
$oc=0;
$len1=strlen($str1);
$len2=strlen($str2); 
if($len1>$len2)
{
switch($ch)
{
case 1:
echo"<br>First occ is at possition :";
echo strpos($str1,$str2); 
echo"<br>Last occ is at possition :";
echo strrpos($str1,$str2); 
      break;
case 2:
$oc=substr_count($str1,$str2); 
if($oc==0)
echo"<br>string '$str2' not present in string '$str1'<br>";
else
echo"<br>sub string '$str2' present $oc times in string
'$str1'<br>";
break; 
case 3:
$str3=str_replace($str2,$str,$str1); 
echo"<br>After relacing string is::$str3"; 
break;
}
}
else
{
switch($ch)
{
case 1:
echo"<br>First occ is at position :";
echo strpos($str2,$str1); 
"<br>Last occ is at possition :";
echo strrpos($str2,$str1); 
break;
case 2:
$oc=substr_count($str2,$str1); 
if($oc==0)
echo"<br>string '$str1' not present in string '$str2'.<br>"; 
else
echo"<br>sub string '$str1' present $oc times in string
 '$str2'.<br>";
break; 
case 3:
$str3=str_replace($str1,$str,$str2); 
echo"<br>After relacing string::'$str3'.";
break;
}
}


?>
