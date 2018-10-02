<style>
<?php include 'style.css'; ?>
</style>
<?php

$Pepsi=$_POST["Pepsi"];
$Beef=$_POST["Beef"];
$Chicken=$_POST["Chicken"];
$ship=$_POST["Ship"];
$shipmethod="";
if($ship==0)
{
  $shipmethod="Free 7 day";
}
elseif ($ship=5)
{
  $shipmethod="$5.00 3 Day";
}
else
{
  $shipmethod="$50.00 3 Day";
}
$user=$_POST["user"];
$pass=$_POST["pass"];
$subp=$Pepsi*2.5;
$subb=$Beef*10;
$subc=$Chicken*5;
$total=$subb+$subc+$subp+$ship;
echo "Welcome to the Receipt Page!<br>";
echo "Your Username:".$user."<br>";
echo "Your Password:".$pass."<br>";
echo  "<table>";
echo  "<tr><th></th><th>Quantaty</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo  "<tr><td>Pepsi</td><td>".$Pepsi."</td><td>$2.50</td><td>$".$subp."</td></tr>";
echo  "<tr><td>Beef</td><td>".$Beef."</td><td>$10.00</td><td>$".$subb."</td></tr>";
echo  "<tr><td>Chicken</td><td>".$Chicken."</td><td>$5.00</td><td>$".$subc."</td></tr>";
echo  "<tr><td>Shiping</td><td colspan=2>".$shipmethod."<td>$".$ship."</td></tr>";
echo  "<tr><td>Total Cost</td><td colspan=4>$".$total."</td></tr>";
echo "</table>";
 ?>
