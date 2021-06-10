<?php
require_once 'database.php';
require_once 'adminFunctions.php';
$faq = getFAQ($connection);

echo '<select name="faq" id="faq">';
echo '<option disable selected> --Choose question-- </option>'."\n";
while ($row = mysqli_fetch_array($faq, MYSQLI_NUM)) {

    echo '<option  name="faq' . $row[0] . '" value="faq' . $row[0] . '">'. $row[1]. '</option>'."\n";
}
echo '</select>';
