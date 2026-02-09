<?php
if if (isset($_POST['binsubmit']))
{
$age = $_POST['txtage'];
if ($age >=18)
echo"<b><br> YOU FLIGIBLE to VOTE!!";
else
echo "<b> <br> YOU ARE NOT ELIGIBLE to VOTE !!</b>";
}
?>