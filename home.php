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