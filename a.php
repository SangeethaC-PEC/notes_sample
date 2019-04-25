<?php
$s1=$_GET["Regulation"];
$s2=$_GET["Department"];
$s3=$_GET["Course"];
$s4=$_GET["CourseCode"];
$c=mysqli_connect('localhost','root','toor');
$d=mysqli_select_db($c,"cse");
$r=mysqli_query($c,"select * from notes where scode='$s4' or sname='$s3'");
WHILE ($r1 = mysqli_fetch_array($r,MYSQLI_NUM))
{
       $n = $r1[4];
?>
<iframe src="<?php echo $n ?>" width="100%" style="height:100%">
</iframe>
<?php
}
?>
