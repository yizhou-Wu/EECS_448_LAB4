<?php

  $counter=0;
  $Q1=$_POST["Q1"];
  $Q2=$_POST["Q2"];
  $Q3=$_POST["Q3"];
  $Q4=$_POST["Q4"];
  $Q5=$_POST["Q5"];
  echo "Quetion1:MATH:(1+4)*5-2=?<br>";
  echo "Your Answer:" .$Q1. "<br>";
  echo "Correct Answer: 23<br><br>";
  echo "Question 2:What is the captial of China<br>";
  echo "Your Answer:" .$Q2."<br>";
  echo "Correct Anwser: Beijing<br><br>";
  echo "Question 3:MATH:1+1=?<br>";
  echo "Your Answer:" .$Q3."<br>";
  echo "Correct Anser: 2 <br><br>";
  echo "Question 4:Which of these drinks is black ?<br>";
  echo "Your Answer:" .$Q4. "<br>";
  echo "Correct Answer: Pepsi <br><br>";
  echo "Question 5:Which of the following colors is not a member of RGB? <br>";
  echo "Your Answer:" .$Q5. "<br>";
  echo "Correct Answer: Black <br><br>";
  if($Q1=="23")
  {
    $counter++;
  }
  if($Q2=="Beijing")
  {
    $counter++;
  }
  if($Q3=="2")
  {
    $counter++;
  }
  if($Q4=="Pepsi")
  {
    $counter++;
  }
  if($Q5=="Black")
  {
    $counter++;
  }
  $result=$counter/5*100;
  echo "Your Score:".$result."%";
?>
