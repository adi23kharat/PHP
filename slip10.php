<?php 
class employee 
{ 
 public $code,$name,$desig; 
 function __construct($a,$b,$c) 
 { 
 $this->code=$a;

 $this->name=$b; 
 $this->desig=$c; 
 } 
 public function display_emp()  { 
 echo' 
 <td>'.$this->code.'</td>  <td>'.$this->name.'</td>  <td>'.$this->desig.'</td>  '; 
 } 
 public function getname() { 
 return $this->name; 
 } 
} 
class emp_acc extends employee {
 public $ano,$jdate; 
 function __construct($a,$b,$c,$d,$e)  { 
 parent::__construct($a,$b,$c);  $this->ano=$d; 
 $this->jdate=$e; 
 } 
 public function display_acc()  { 
 echo' 
 <td>'.$this->ano.'</td>  <td>'.$this->jdate.'</td>  '; 
 } 
} 
class emp_sal extends emp_acc {

 public $bpay,$earns,$ded,$total; 
 function __construct($a,$b,$c,$d,$e,$f,$g,$h)  { 
 parent::__construct($a,$b,$c,$d,$e); 
 $this->bpay=$f; 
 $this->earns=$g; 
 $this->ded=$h; 
 $this->total=$this->bpay + $this->earns - $this->ded;  } 
 public function display_sal() 
 { 
 echo' 
 <td>'.$this->bpay.'</td> 
 <td>'.$this->earns.'</td> 
 <td>'.$this->ded.'</td> 
 <td>'.$this->total.'</td> '; 
 }
} 
$emp[0]=new  
emp_sal('A923B','Ravindra','Staff','10001','21/09/2011','20000','5000','3000'); $emp[1]=new emp_sal('A823B','Kiran','HR','10002','22/09/2011','25000','5000','3000'); 
$emp[2]=new  
emp_sal('A723B','Sudhir','Analyst','10003','23/09/2011','22000','5000','3000'); 
$emp[3]=new  
emp_sal('A623B','Mahesh','Organiser','10004','24/09/2011','21000','5000','3000'); 
$emp[4]=new  
emp_sal('A523B','Ak','Manager','10005','25/09/2011','30000','5000','3000'); $emp[5]=new emp_sal('A423B','Ravi','Staff','10006','26/09/2011','20000','5000','3000'); 
$emp[6]=new  
emp_sal('A323B','Vashali','Analyst','10007','27/09/2011','21000','5000','3000'); 
$emp[7]=new  
emp_sal('A223B','Mahi','Organiser','10008','28/09/2011','21000','5000','3000'); 
$emp[8]=new  
emp_sal('A123B','Karna','Staff','10009','29/09/2011','20000','5000','3000'); $emp[9]=new emp_sal('A023B','Suraj','Staff','10010','30/09/2011','20000','5000','3000'); $ch=$_POST['rad']; 
$ename=$_POST['ename'];
$flag=0; 
function mastertable($emp) 
{ 
 echo '<table border="1" width="100%">  <tr> 
 <th>Code</th> 
 <th>Name</th> 
 <th>Designation</th>  <th>Ac No</th> 
 <th>Join date</th> 
 <th>Basic Pay</th> 
 <th>Earnings</th> 
 <th>Deduction</th>  <th>Total Salary</th> 
 </tr>';
 for($i=0;$i<10;$i++)  { 
 echo '<tr>'; 
 $emp[$i]->display_emp();  $emp[$i]->display_acc();  $emp[$i]->display_sal();  echo '</tr>'; 
 } 
 echo '</table>'; 
} 
switch($ch) 
{ 
 case 1:  
 mastertable($emp);  break;
 case 2: echo 'Sorting w.r.t Employee Code <br><br>';  function srt($a,$b) 
 { 
 return strcmp($a->code,$b->code); 
 } 
 usort($emp,"srt"); 
  
 mastertable($emp); 
 break; 
 case 3: echo "Searching for employee $ename .....<br><br>";  for($i=0;$i<10;$i++) 
 { 
 $temp=$emp[$i]->getname(); 
 if($temp==$ename) 
 { 
 $flag=1;
 break; 
 } 
 } 
 if($flag==0) 
 { 
 echo "Not Found<br>"; 
 } 
 else 
 { 
 echo "Found in the records<br>"; 
 } 
 break; 
 case 4: echo "Displaying Salary of all Employees .... <br><br>";  echo '<table border="1" width="100%"> 
 <tr> 
 <th>Employee Name</th>
 <th>Basic Pay</th> 
 <th>Earnings</th> 
 <th>Deduction</th> 
 <th>Total Salary</th> 
 </tr>'; 
 for($i=0;$i<10;$i++) 
 { 
 echo '<tr> 
 <td>'.$emp[$i]->getname().'</td>  '; 
 $emp[$i]->display_sal(); 
  
 } 
 break; 
} 
?>
