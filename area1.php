<?php
$content = $_REQUEST['t'];
$myfile = fopen("input.txt", "w") or die("Unable to open file!");
fwrite($myfile, $content);
fclose($myfile);
$a =  shell_exec("python abcd.py");
$b = explode("$",$a);

$ans = array();
$unique = array();
for($j=0;$j<count($b)-1;$j++){
if($j%2 != 0){
array_push($ans,$b[$j]);
}
}


$unique = array_unique($ans);

echo "<br>";
$my_str="";
$k=1;
$p=0;
echo "<html><body><form action='result.php' method='post'>";
for($i=0;$i<count($b)-1;$i++){
echo "<b>Question $k: </b>";
echo $b[$i];
echo "<br>";
$i++;
$k++;
echo "<b>Answer&nbsp &nbsp  :  </b>";
echo "<input type=text name=$p>";
echo $b[$i];
echo "<br>";
echo "<br>";
$my_str = $my_str.$b[$i];
$my_str = $my_str.",";
$p++;
}
echo "<input type='hidden' value='$my_str' name='str_arr'>";
echo "<input type='submit'>";
echo "</form></body></html>";
?>