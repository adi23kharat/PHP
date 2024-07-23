<?php 
extract($_POST);
$code=explode(",", $codes);
$lenCode=count($code);
$name=explode(",", $names);
$lenName=count($name);
$sold=explode(",", $solds);
$lenSold=count($sold);
$rate=explode(",", $rates);
$lenRate=count($rate);
$total=0;
?>
<table border="1">
<tr>
<th>Item Code</th>
<th>Item Name</th>
<th>Item Sold</th>
<th>Item rate</th>
<th>Total</th>
</tr>
<?php 
if(($lenCode==$lenName)&&($lenCode==$lenSold)&&($lenCode==$lenRate))
{
for($i=0;$i<$lenCode;$i++)
{
$total=$total+($sold[$i]*$rate[$i]); 
?>
<tr>
<td><?php echo $code[$i]; ?></td>
<td><?php echo $name[$i]; ?></td>
<td><?php echo $sold[$i]; ?></td>
<td><?php echo $rate[$i]; ?></td>
<td><?php echo $sold[$i]*$rate[$i]; ?></td>
</tr>
<?php
}
}
else
{
echo "Error";
}
?>
<tr>
<th colspan="5" align="right"><h1>Total Bill Amount :- <?php echo $total;
?></h1></th>
</tr>
</table>
