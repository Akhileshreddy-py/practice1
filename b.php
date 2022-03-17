<?php
$n=$_FILES['f']['tmp_name'];
echo "<h1> hello bhai $n </h1>";
if(move_uploaded_file($n,"images/a.jpg"))
{
echo "success";
echo '<img src="images/a.jpg" width="400px" height="400px"/> ';
}
else
{
echo "failed";
}
?>