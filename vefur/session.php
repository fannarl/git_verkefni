<?php
session_start();

$_SESSION["Uname"] = "Uname";
$_SESSION["password"] = "password";

echo "Session variables are set.";