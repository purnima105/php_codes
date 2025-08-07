<?php

session_start();
session_unset();   //key value pair lai unset garxa
session_destroy();  // session lai destroy garxa

header("Location:/project_format/");  //index (main) page ma redirect gardinxa
?>