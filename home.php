<h2>writ a program to print swaping two variable</h2>
<?php
 $a =4;
 $b = 5;
 $a = $a+$b;
 $b = $a-$b;
 $a = $a-$b;
 echo $a;
 echo '<br>';
 echo $b;
 echo '<br>';
?>
<h2>write a program to find max and second max number from array</h2>
<?php
$data = array('200', '15','69','122','50','201');
$data_cont = count($data);
$max_1 = $max_2 = 0;
for ($i=0; $i<count($data); $i++) { 
    if ($data[$i] > $max_1){ 
        $max_2 = $max_1;
        $max_1 = $data[$i];
    }
     else if ($data[$i] > $max_2 && $data[$i] != $max_2)
    {
      $max_2 = $data[$i];
    }
   
}
echo 'max_1=' .$max_1;
echo'<br>';
echo 'max_1='.$max_2;
?>
<h3>Finding max value using diffrent method </h3>
<?php
$data = array('200', '15','69','122','50','201');
$cont = count($data);
$temp ='';
$temp2='';
for ($j=0; $j < $cont; $j++) { 
     for ($i=0; $i < count($data)-1; $i++) { 
         if ($data[$i+1] > $data[$i]){
          $temp = $data[$i+1] ;
          $data[$i+1] = $data[$i];
          $data[$i] = $temp;
          if($data[$i+1] == $data[1]){
            $temp2 = $data[$i+1];
            
        }
     }
     }
     
     
}
echo $temp2;
echo'<br>';
echo $temp;
?>
