<!DOCTYPE html> 
<html> 
<body> 
<?php 
class Account { 
 public $acc_no; 
 public $acc_name; 
 public function __construct($acc_name, $acc_no) {  $this->acc_name = $acc_name; 
 $this->acc_no = $acc_no; 
 }
 public function intro() { 
 echo "The Account name {$this->acc_name} and Account  No is {$this->acc_no}."; 
 } 
} 
class saveing_acc extends Account { 
 public $blance; 
 public $min_amount; 
 public function __construct($acc_name, $acc_no,  $blance,$min_amount) { 
 $this->acc_name = $acc_name;
 $this->acc_no = $acc_no; 
 $this->blance = $blance; 
 $this->min_amount = $min_amount;  } 
 public function intro() { 
 echo"<table border='2'>"; 
 echo"<tr><td>Account Name</td><td>Account  no</td><td>balance</td><td>min_balance</td></tr>"; 
  
 echo "<tr><td>{$this->acc_name}</td>";  echo "<td>{$this->acc_no}</td>" ; 
 echo"<td>{$this->blance}</td>";
 echo"<td>{$this->min_amount}</td></tr>";   
 } 
} 
class current_acc extends Account { 
 public $blan; 
 public $min_amt; 
 public function __construct($acc_name, $acc_no,  $blan,$min_amount) { 
 $this->acc_name = $acc_name; 
 $this->acc_no = $acc_no;
 $this->blan = $blan; 
 $this->min_amount = $min_amount;  } 
 public function intro() { 
  
 echo " <tr><td>{$this->acc_name}</td>";  echo "<td>{$this->acc_no}</td>" ;  echo "<td>{$this->blan}</td>"; 
 echo "<td>{$this->min_amount}</td></tr> ";   
 } 
}
echo"</table>"; 
$saveing_acc= new saveing_acc("Ravindra", 1111,  5000,1000); 
$saveing_acc->intro(); 
$current_acc=new current_acc("Kiran",2222,100000,1000); $current_acc->intro(); 
?> 
</body> 
</html> 
