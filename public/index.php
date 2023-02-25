<?php

require "../app/classes/Password.php";

$c = new Password(12);

echo "<pre>";
print_r($c->generate(12));
echo "</pre>";

?>