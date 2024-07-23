<?php 
extract($_POST);
$lenStr1=strlen($str1);
$lenStr2=strlen($str2); 
if($lenStr1>$lenStr2)
{
switch($ch)
{
case 1:
if(strpos($str1,$str2)==0)
{
echo "Small String Appears at First";
 break;
}
else
{ 
echo "Small String not Appears at First";
 break;
}
case 2:
$strNew=str_replace($str2, $str3, $str1);
echo $strNew; 
break;
case 3:
print_r(preg_split("/\s/", $str1));
 break;
}
}
else
{
switch($ch)
{
case 1:
if(strpos($str2,$str1)==0)
{
echo "Small String Appears at First";
 break;
}
else
{
echo "Small String not Appears at First"; 
break;
 }
case 2:

$strNew=str_replace($str1, $str3, $str2); 
echo $strNew;
break; 
case 3:
print_r(preg_split("/\s/", $str2));
 break;
}
}
?>
