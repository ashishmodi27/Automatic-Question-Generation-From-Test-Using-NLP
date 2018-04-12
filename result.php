<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Material Design Box Shadows</title>
      <link rel="stylesheet" href="san.css">
</head>
<br><br>
<body>

<div class="card">
	<center><H3><font color="#000000">REULTS & INSTRUCTIONS</font></H3></center>
	<p align="center"><font color="#000099" font-style: italic; >
		Student scoring more than 70% in the Test will be Considered as the Expert Level on that particular topic and will be allowed to attend the high_level Test directly whereas student scoring between 50-69% has to give the first level exam and then the high_level Exam. Lastly, student scoring less than 50% has to study the topic and again appear for the low level Question.
	</font></p>
	<center><H3><font color="#000000"Your Score is>Your Score is</font></H3></center>
		<?php
$ans = $_REQUEST['str_arr'];
$qwerty =  mb_substr($ans, 0, -1);
$answer = explode(",",$qwerty);
$count = 0;
for($i=0;$i<count($answer);$i++){
$res = $_REQUEST[$i];
$res = trim($res);
	if($res==trim($answer[$i])){
	$count++;
	}
}
echo "<center><b>";
echo "<font size='6'>";
echo $count;
echo "<br>";
echo "------";
echo "<br>";
echo count($answer);
echo "<br>";
echo "</font>";
echo "<br>";
echo "<font size='4'>";
echo "Marks in Percentage &nbsp";
echo round(($count/count($answer))*100,2);
echo "%";
echo "</font>";
echo "</b></center>";
?>
</div>
</body>
</html>