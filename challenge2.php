<?php

$msg="0@sn9sirppa@#?ia’jgtvryko1";
$strenghCaracter=strlen($msg);
$keyNumber=$strenghCaracter/2;
$subString=substr($msg,6,$keyNumber);
$subString=str_replace("@#?", "",$subString );





echo "<br> le message est : " .strrev($subString); "<br>"



//0@sn9sirppa@#?





?>