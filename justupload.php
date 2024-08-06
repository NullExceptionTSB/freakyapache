<?php
$f = file_get_contents("php://input");
file_put_contents('upload/'.time(), $f);
