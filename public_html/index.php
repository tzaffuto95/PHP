<?php
echo "<form action = 'page2.php' method = 'get'>";
echo "Enter your first name <input type = 'text' name = 'fred'><br />";
echo "Enter your last name <input type = 'text' name = 'wilma'><br />";
echo " a <input type = 'radio' name = 'barney' value = 'a' >";
echo " b <input type = 'radio' name = 'barney' value = 'b' >";
echo " c <input type = 'radio' name = 'barney' value = 'c' ><br />";
echo " <input type = 'checkbox' name = 'val[]' value = 'hello'> hello&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'goodbye'> goodbye&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'good morning'> good morning&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'good evening'> good evening<br />";
echo "<select name = 'orange'>";
echo "<option 'fred'>fred</option>";
echo "<option 'wilma'>wilma</option>";
echo "<option 'barney'>barney</option>";
echo "<option 'betty'>betty</option>";
echo "</select>";

echo  "<input type = 'submit' value = 'Click Me'>";
echo "</form>";
?>
