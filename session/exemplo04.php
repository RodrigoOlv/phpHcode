<?php

session_id('nt5o35sdnst2q8q6kjofgneg9darray(0) { }');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>