<?php
session_name("nombresesion1");
session_start();

print "<p>El nombre es $_SESSION[nombre]</p>";
