<?php
$npass="qwerty";
$hash = password_hash($npass, PASSWORD_DEFAULT);
echo  "$hash";
?>