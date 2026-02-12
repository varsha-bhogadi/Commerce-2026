<?php
include "db.php";

setcookie("remember_token", "", time()-3600, "/");
session_destroy();

header("Location: login.php");
