<?php
echo "<form action = 'quiz2.php' method = 'get'>";

echo "Enter your first name <input type = 'text' name = 'fName'><br />";
echo "Enter your last name <input type = 'text' name = 'lName'><br />";
echo "Enter your password <input type = 'password' name = 'pass'><br />";

echo "Enter your email <input type = 'text' name = 'email'><br />";
echo " male <input type = 'radio' name = 'gender' value = 'male' >";
echo " female <input type = 'radio' name = 'gender' value = 'female' ><br />";

echo " <input type = 'checkbox' name = 'food[]' value = 'hamburger'> hamburger&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'salad'> salad&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'water'> water&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'soda'> soda&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'cake'> cake<br />";

echo "<select name = 'payment'>";
echo "<option 'cash'>cash</option>";
echo "<option 'check'>check</option>";
echo "<option 'visa'>visa</option>";
echo "<option 'american_express'>american_express</option>";
echo "</select>";

echo "<input type = 'submit' value = 'Submit'>";
echo "</form>";


?>
