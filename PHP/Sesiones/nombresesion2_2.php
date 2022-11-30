<?php
session_name("nombresesion2");
session_start();

print "<p>El nombre es $_SESSION[nombre]</p>";
