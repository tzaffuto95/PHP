<?php

$var = $_GET['fName'];
$var1 = $_GET['lName'];
$var2 = $_GET['pass'];
$mail = $_GET['email'];
$at=strpos($mail, '@');
$name = substr($mail,0, $at);
$end = substr($mail, $at + 1);
$dot = strpos($end, '.');
$dot2 = strpos($mail, '.');
$last = substr($mail, $dot2 +1);
$po = substr($end, 0, $dot);
$domain = substr($mail, $at + 1, strpos($mail, '.'));
$var3 = $_GET['gender'];
$sel = $_GET['payment'];
$var4 = $_GET['food'];

if(empty($var)|| empty($var1) || empty($var2) || empty($var3) || empty($var4) || empty($sel) || empty($mail))
{
echo "<a href=\"javascript:history.go(-1)\">Fill Out Entire Form</a>";
}

else
{

echo "First Name"."<br />";
echo $var."<br />"."<br />";
echo "Last Name"."<br />";
echo $var1."<br />"."<br />";
echo "Password"."<br />";
echo crypt($var2)."<br />"."<br />";


if ($at == true && $dot == true)
{
echo "Email"."<br />";
echo $mail."<br />";
echo $at . "<br />";
echo $name."<br />";
echo strpos($mail, '.') ."<br />";
echo $po ."<br />";
echo $last ."<br />";
echo $domain . "<br />"."<br />";
}

else
{
echo "That was an invalid email!" ."<br />";
echo "<a href=\"javascript:history.go(-1)\">Fill Out Entire Form</a>" ."<br />" ."<br />";
}


echo "Gender"."<br />";
echo $var3."<br />"."<br />";


echo "Payment Method"."<br />";
echo $sel."<br />"."<br />";

if (isset($_GET['food']))
{
echo "Food Ordered"."<br />";
foreach ($var4 as $value)
{
echo $value."<br />";
}
}
else
{
echo "Please select what food you want"."<br />" ."<br />";
}
}
?>
