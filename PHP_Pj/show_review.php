<html>
<head>
<link rel="stylesheet" href="review.css">






</head>
<body style="background-color:black;">




<?php
$con = mysqli_connect("localhost","root","");
if (!$con){ die('Could not connect: ' . mysqli_error( ));
}
mysqli_select_db($con,"project_db" );
$query="select * from feedback";      
$ret=mysqli_query($con,$query);
$num_results = mysqli_num_rows($ret);
echo "User FeedBack";
echo "<center><table  border=1 width=\"75%\">";
echo "<tr>";
echo "<th align=\"left\">User Name</th>";
echo "<th align=\"left\">User Email</th>";
echo "<th align=\"left\">Subject</th>";
echo "<th align=\"left\">Message</th>";
echo "</tr>";    
for ($i=0; $i<$num_results; $i++)
{    $row = mysqli_fetch_array($ret);
    echo "<tr>"; 
    echo "<td >".$row["userName"]."</td>";              
    echo "<td>".$row["userEmail"]."</td>";
    echo "<td>".$row["subject"]."</td>";
    echo "<td>".$row["message"]."</td>";
    
    echo "</tr>";
}
 echo "</table></center>";        
?>
</html>
</body>