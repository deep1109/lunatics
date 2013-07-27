<!DOCTYPE html>

<html>

<head>
<style>
body
{
background-image:url(15.jpg);
 background-repeat:no-repeat;
 background-size:cover;
}
</style>
</head>
<body>
<br>
<div align="center">
<h2><font color="black"><u>Details and Attendance Status:</u></font></h2>
</div>

</body>
</html>




<?php
   $cl=explode(':',$_REQUEST['cl']);
	
	$detail = $cl[0];

include('connection.php');
$q=mysql_query("SELECT * FROM abcd WHERE Name='$detail'");

while($row=mysql_fetch_array($q))
{
	
      echo "<font size='3'><b>Member Name </b></font>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp ".$name=$row['name'];
      echo "<br>";
	echo "<font size='3'><b>State</b></font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp ".$b=$row['state']."<br>";
	echo "<font size='3'><b>Constituency</b></font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp ".$b=$row['constituency']."<br>";
        echo "<font size='3'><b>Party</b></font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp ".$b=$row['party']."<br>";
        echo "<font size='3'><b>Residential Address</b></font>&nbsp &nbsp : &nbsp ".$b=$row['permanent_address']."<br>";
	echo "<font size='3'><b>Official Address</b></font> &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp : &nbsp ".$b=$row['present_address']."<br>";
        echo "<font size='3'><b>Contact</b></font>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp ".$b=$row['contact']."<br>";
	echo "<font size='3'><b>Email</b></font> &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp " .$b=$row['email_address']."<br>";
      



}
	
echo "<br>";
echo "<br>";


$qu=mysql_query("Select * from session_table where Name='$name' ");



echo "<table border='3' CELLPADDING='20'>
<tr>

<th>Session No.</th>
<th> Total Number of Days</th>
<th>Number of Present Days</th>
<th>Number of Absent Days</th>
</tr>";




while($row1=mysql_fetch_array($qu))
   


{  echo "<tr>";

    
	 echo "<td>" . $row1['session_no'] . "</td>";
	echo "<td>" . $row1['total_days'] . "</td>";
	 echo "<td>" . $row1['no_of_days_present'] . "</td>";
	 echo "<td>" . $row1['no_of_days_absent'] . "</td>";
         echo "</tr>"; 


  echo "</tr>";
}
echo "</table>";

	
?>
<button onClick='$("#result").hide(1000) &&  $(document).scrollTo("#pagewidth", {duration:1000});' type="submit" class="btn btn-large btn-chunkfive offset5">Close</button>