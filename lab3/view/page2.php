<?php
session_start();
echo "Your name is ". $_SESSION["name"];
session_destroy();
?>