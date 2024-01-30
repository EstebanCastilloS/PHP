<?php

$clave = "HolaMundo123";

// echo md5($clave);
// echo sha1($clave);
// echo hash("md5", $clave);

echo password_hash($clave,PASSWORD_BCRYPT.["cost"=>11]);