Hi from page2<br />
<?php
$var1 = $_GET['fred'];
echo $var1;
if (isset($_GET['val']))
{
$var = $_GET['val'];
foreach ($var as $value)
{
echo $value."<br />";
}
}
else
{
echo "sorry"."<br />";
}
$sel = $_GET['orange'];
echo $sel;
?>
