<?php

include (dirname(__DIR__)."../../Model/Personal.php");
$p = new Personal();
$personal = $p->getAllPersonalBd();
?>