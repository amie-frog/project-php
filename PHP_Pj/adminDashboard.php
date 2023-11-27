<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$suggestion=$_POST['suggestion'];
$con = mysqli_connect("localhost","root","","project_db");
if (!$con){die('Could not connect: ' . mysqli_error());      }
   
mysqli_select_db($con,"project_db");
// mysqli_query($con,"insert into admin (first_ame,sur_name, values ('Moe','Swe',)");
if(mysqli_query($con,"insert into feedback  values ('$name','$email','$subject','$suggestion')")){
echo "<br>Thank you for your feedback.We\'ll appreciate!";
}
else "Something went wrong: ".mysqli_error($con);
mysqli_close($con);  

?>
<a href="show_review.php">Show Review</a>
