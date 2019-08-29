 <?php
//database connection
function connect()
{
 $con = mysqli_connect("127.0.0.1","root","","vspeaker");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
return $con;
}
?>